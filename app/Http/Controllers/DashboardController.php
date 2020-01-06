<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Artisan;
use App;

class DashboardController extends Controller
{

	protected $user_id;

    //public function index() {
    public function index($id) {
		$this->user_id = Auth::id();
		$client = App\Client::where('user_id', '=', $this->user_id)->findOrFail($id);
		$summ_cash_flow = $this->summ_cash_flow($id);
		$summ_finance_flow = $this->summ_finance_flow($id);

    	return view('dashboard', compact('client', 'summ_cash_flow', 'summ_finance_flow'));
    }

    public function buscar_historial() {
		$this->user_id = Auth::id();
    	$clients = App\User::find($this->user_id)->clients;
    	return view('history', compact('clients'));
    }

    public function editar($id) { //hay que concluir esto
    	$client = App\Client::findOrFail($id);
    	return view('input_data_dashboard', compact('client'));
    }
    
    public function update(Request $request, $id) {

    	$clientUpdate = App\Client::findOrFail($id);
    	$clientUpdate->name = $request->name;
    	$clientUpdate->address = $request->address;
    	$clientUpdate->touch();

    	$success = $clientUpdate->save();

    	if ($sucess) {
    		$mensaje = 'Registro alterado con exito.';
			$seccion = 'mensaje';
    	} else {
    		$mensaje = 'Problemas al alterar registro.';
			$seccion = 'mensaje_err';
    	};
    	return back()->with($seccion, $mensaje);
	}
	
	protected function chartData($user_id, $selectedFlow)
	{
		if(Auth::check() === true && Auth::user()->id == $user_id){

			if($selectedFlow == 0) {

				$ResutDataQuery = DB::table('users')
									->join('clients', 'users.id', '=', 'clients.user_id')
									->join('cash_flows', 'clients.id', '=', 'cash_flows.client_id')
									->select('cash_flows.vl_accumulated', 'cash_flows.period')
									->orderBy('period')
									->get();

				var_dump($ResutDataQuery);

			} else if($selectedFlow == 1) {

				// $ResutDataQuery = DB::table('users')
				// 					->join('clients', 'users.id', '=', 'clients.user_id')
				// 					->join('finance_flows', 'clients.id', '=', 'finance_flows.client_id')
				// 					->select('finance_flows.vl_accumulated', 'finance_flows.period')
				// 					->orderBy('period')
				// 					->get();

				echo 'Entre al Finaciado';

			}
			// return response()->json($ResutDataQuery);
		}
		echo 'Datos restringidos';
	}

	protected function expensesChart($user_id, $client_id, $tp_flow)
	{
		if(Auth::check() === true && Auth::user()->id == $user_id) {
			if($tp_flow == 'contado') {

				$ResutDataQuery = DB::table('users')
									->join('clients', 'users.id', '=', 'clients.user_id')
									->join('cash_flows', 'clients.id', '=', 'cash_flows.client_id')
									->sum('cash_flows.vl_irrigation_sys', 'cash_flows.vl_investment', 'cash_flows.vl_energy', 'cash_flows.vl_maintenance', 'cash_flows.vl_entry', 'cash_flows.vl_liquidation', 'cash_flows.vl_period_flow')
									->get();

			} elseif ($tp_flow == 'financiado') {

				$ResutDataQuery = DB::table('users')
									->join('clients', 'users.id', '=', 'clients.user_id')
									->join('finance_flows', 'clients.id', '=', 'finance_flows.client_id')
									->sum('finance_flows.vl_irrigation_sys', 'finance_flows.vl_balance', 'finance_flows.vl_crop_interest', 'finance_flows.vl_investment', 'finance_flows.vl_energy', 'finance_flows.vl_maintenance', 'finance_flows.vl_entry', 'finance_flows.vl_liquidation', 'finance_flows.vl_period_flow')
									->get();
			}

			return response()->json($ResutDataQuery);
		}
		echo 'Datos restringidos';
	}

	public function timeline($user_id, $client_id, $tp_flow) {
		if(Auth::check() === true && Auth::user()->id == $user_id) {
			if($tp_flow == 'contado') {

				$ResutDataQuery = DB::table('users')
									->join('clients', 'users.id', '=', 'clients.user_id')
									->join('cash_flows', 'clients.id', '=', 'cash_flows.client_id')
									->selct('cash_flows.period', 'cash_flows.vl_irrigation_sys', 'cash_flows.vl_investment', 'cash_flows.vl_energy', 'cash_flows.vl_maintenance', 'cash_flows.vl_entry', 'cash_flows.vl_liquidation', 'cash_flows.vl_period_flow', 'cash_flows.vl_accumulated')
									->get();

			} elseif ($tp_flow == 'financiado') {

				$ResutDataQuery = DB::table('users')
									->join('clients', 'users.id', '=', 'clients.user_id')
									->join('finance_flows', 'clients.id', '=', 'finance_flows.client_id')
									->select('finance_flows.period', 'finance_flows.vl_irrigation_sys', 'finance_flows.vl_balance', 'finance_flows.vl_crop_interest', 'finance_flows.vl_investment', 'finance_flows.vl_energy', 'finance_flows.vl_maintenance', 'finance_flows.vl_entry', 'finance_flows.vl_liquidation', 'finance_flows.vl_period_flow', 'finance_flows.vl_accumulated')
									->get();
			}

			return response()->json($ResutDataQuery);
		}
		echo 'Datos restringidos';
	}

    public function delete($id) {
    	$clientDelete = App\Client::findOrFail($id);
    	$delete = $clientDelete->delete();

    	if ($delete) {
    		$mensaje = 'Registro eliminado con exito.';
			$seccion = 'mensaje';
    	} else {
    		$mensaje = 'Problemas al eliminar registro.';
			$seccion = 'mensaje_err';
    	};
    	return back()->with($seccion, $mensaje);
	}

	public function summ_finance_flow($client_id) {
		$anio_recuperacion = DB::table('finance_flows')
								->where([['vl_accumulated', '>=', 0], ['client_id', '=', $client_id]])
								->min('period');
		// VPN
		$discount_tax = DB::table('clients')
						->where('id', '=', $client_id)
						->value('discount_tax');
				
		$discount_tax = $discount_tax / 100;

		$finance_flows = DB::table('finance_flows')
				->where('client_id', '=', $client_id)
				->select('period', 'vl_period_flow')
				->get();

		$vpn = 0;
		foreach($finance_flows as $finance_flow) {
			$vpn = $vpn + ($finance_flow->vl_period_flow / pow((1 + $discount_tax), $finance_flow->period));
		}

		//TIR
		$tir = 0;
		$vpn_calc_tir = $vpn;
		do {
			$tir += 0.01;
			foreach($finance_flows as $finance_flow) {
				$vpn_calc_tir = $vpn_calc_tir + ($finance_flow->vl_period_flow / pow((1 + $tir), $finance_flow->period));
				if ($vpn_calc_tir > 0)
				{
				break;
				}
			}
			if ($tir > 100) {
				$tir = 0;
			break;
			}
		} while($vpn_calc_tir >= 0);

		//Return
		$vpn = number_format($vpn, 2, ",", ".");
		$tir = $tir * 100;
		$resumen = ['anio_recuperacion' => $anio_recuperacion, 
					'tir' => $tir,  
					'vpn' => $vpn];

        return $resumen;
	}

	public function summ_cash_flow($client_id) {
		$anio_recuperacion = DB::table('cash_flows')
								->where([['vl_accumulated', '>=', 0], ['client_id', '=', $client_id]])
								->min('period');
		
		// VPN
		$discount_tax = DB::table('clients')
						->where('id', '=', $client_id)
						->value('discount_tax');
				
		$discount_tax = $discount_tax / 100;

		$cash_flows = DB::table('cash_flows')
				->where('client_id', '=', $client_id)
				->select('period', 'vl_period_flow')
				->get();

		$vpn = 0;
		foreach($cash_flows as $cash_flow) {
			$vpn = $vpn + ($cash_flow->vl_period_flow / pow((1 + $discount_tax), $cash_flow->period));
		}

		//TIR
		$tir = 0;
		$vpn_calc_tir = $vpn;
		do {
			$tir += 0.01;
			foreach($cash_flows as $cash_flow) {
				$vpn_calc_tir = $vpn_calc_tir + ($cash_flow->vl_period_flow / pow((1 + $tir), $cash_flow->period));
				if ($vpn_calc_tir > 0)
				{
				break;
				}
			}
			if ($tir > 100) {
				$tir = 0;
			break;
			}
		} while($vpn_calc_tir >= 0);

		//Return
		$vpn = number_format($vpn, 2, ",", ".");
		$tir = $tir * 100;
		$resumen = ['anio_recuperacion' => $anio_recuperacion, 
					'tir' => $tir,  
					'vpn' => $vpn];

        return $resumen;
	}



}

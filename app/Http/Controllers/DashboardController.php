<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Artisan;
use App;

class DashboardController extends Controller
{
    //public function index() {
    public function index($id) {
		$client = App\Client::findOrFail($id);
		$summ_cash_flow = $this->summ_cash_flow($id);
		$summ_finance_flow = $this->summ_finance_flow($id);

    	return view('dashboard', compact('client', 'summ_cash_flow', 'summ_finance_flow'));

        //return view('dashboard');
    }

    public function buscar_historial() {
    	$user_id = Auth::id();
    	$clients = App\User::find($user_id)->clients;
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
	
	protected function chartData($userId)
	{
		if(Auth::check() === true && Auth::user()->id == $userId){
			//call database line for data chart TIR
			$ResutDataQuery = [-15, 10, 5, 2, 20, 30, 45];
			return response()->json($ResutDataQuery);
		}
		echo'Datos restringidos';
	}

	protected function expensesChart($userId)
	{
		if(Auth::check() === true && Auth::user()->id == $userId){
			//call database line for data chart expenses
			$ResutDataQuery = [50, 80, 7, 22, 20, 30, 35];
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
		$tir = null;
		$vpn = null;

		$resumen = [$anio_recuperacion, $tir, $vpn];

        return $resumen;
	}

	public function summ_cash_flow($client_id) {
		$anio_recuperacion = DB::table('cash_flows')
								->where([['vl_accumulated', '>=', 0], ['client_id', '=', $client_id]])
								->min('period');
		
		//TIR
		$tir = null;

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
			//$tir = $tir + ($cash_flow->vl_period_flow) / pow((1 + ""), $cash_flow->period);
		}

		$vpn = number_format($vpn, 2, ",", ".");

		//Return
		$resumen = ['anio_recuperacion' => $anio_recuperacion, 
					'tir' => $tir,  
					'vpn' => $vpn];

        return $resumen;
	}



}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Artisan;
use App;
use App\Http\Controllers\Redirect;
//use Illuminate\Support\Facades\Validator;


class DatosController extends Controller
{
	//use ValidatesRequests;


	public function index() {
    	return view('input_data_dashboard');
    }

    /*protected function validator(Request $request)
    {
     return $validadtedData = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:100'],
            'country_state' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'production' => ['required', 'string', 'max:11'],
            'culture' => ['required', 'string', 'max:45']
        ]);
    }*/

    public function guardar(Request $request) {
    	//return $request->all();

    	$request->validate([
            'client' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:100'],
            'country_state' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100'],
            'production' => ['required', 'numeric', 'digits_between:1,11'],
            'culture' => ['required', 'string', 'max:45']
        ]);

        $client =new App\Client;

        $client ->user_id =Auth::id();
    	$client ->client = $request->client;
    	$client ->address = $request->address;
    	$client ->country_state = $request->country_state;
    	$client ->email = $request->email;
    	$client ->production = $request->production;
    	$client ->culture = $request->culture;

    	$success = $client->save();

    	$id_cliente = $client->id;
    	$retorno_contado = $this->flujoContado($request,  $id_cliente);
    	$retorno_financiado = $this->flujoFinanciado($request, $id_cliente);

    	if($success && $retorno_contado && $retorno_financiado){
            //return redirect('dashboard', $id_cliente)->with('successRegister','Cliente registrado correctamente');
            return redirect('dashboard')->with('successRegister', 'Succeso al registrar cliente');
        }else{
            return redirect('input_data_dashboard')->with('errorRegister', 'Problemas al registrar cliente');
        }
    }

    public function flujoContado($request, $id_cliente ) {

        $request->validate([
            'Periodo' => ['required', 'numeric', 'digits_between:1,10'],
            'Sistema de riego ($)' => ['required', 'numeric', 'digits_between:2,15'],
            'Inversión cultivo ($)' => ['required', 'numeric', 'digits_between:2,15'],
            'Energía ($)' => ['required', 'numeric', 'digits_between:2,15'],
            'Mantenimiento ($)' => ['required', 'numeric', 'digits_between:2,15'],
            'Ingreso ($)' => ['required', 'numeric', 'digits_between:2,15'],
            'Liquidación ($)' => ['required', 'numeric', 'digits_between:2,15'],
            'Flujo por periodo ($)' => ['required', 'numeric', 'digits_between:2,15'],
            'Acumulado ($)' => ['required', 'numeric', 'digits_between:2,15'],    
        ]);

    	$contado = new App\Cash_flow;
    	$contado->period = $request->period;
		$contado->vl_irrigation_sys = $request->vl_irrigation_sys;
		$contado->vl_investment = $request->vl_investment;
		$contado->vl_energy = $request->vl_energy;
		$contado->vl_maintenance = $request->vl_maintenance;
		$contado->vl_entry = $request->vl_entry;
		$contado->vl_liquidation = $request->vl_liquidation;
		$contado->vl_period_flow = $request->vl_period_flow;
		$contado->vl_accumulated = $request->vl_accumulated;
		$contado->client_id = $id_cliente;

		$success = $contado->save();

		return $success;
    }

    public function flujoFinanciado($request, $id_cliente ) {

    	$request->validate([
            'period' => ['required', 'numeric', 'digits_between:1,10'],
            'Capital sistema de riego ($)' => ['required', 'numeric', 'digits_between:2,15'],
            'Saldo insoluto  ($)' => ['required', 'numeric', 'digits_between:2,15'],
            'Interés sisstema de riego ($)' => ['required', 'numeric', 'digits_between:2,15'],
            'Inversión cultivo ($)' => ['required', 'numeric', 'digits_between:2,15'],
            'Energía ($)' => ['required', 'numeric', 'digits_between:2,15'],
            'Mantenimiento ($)' => ['required', 'numeric', 'digits_between:2,15'],
            'Ingreso  ($)' => ['required', 'numeric', 'digits_between:2,15'],
            'Liquidación ($)' => ['required', 'numeric', 'digits_between:2,15'],
            'Flujo por periodo ($)' => ['required', 'numeric', 'digits_between:2,15'],
            'Acumulado' => ['required', 'numeric', 'digits_between:2,15'],
        ]);

        $financiado = new App\Finance_flow;

    	$financiado ->period = $request->period;
    	$financiado ->vl_irrigation_sys = $request->vl_irrigation_sys;
        $financiado ->vl_balance = $request->vl_balance;
        $financiado ->vl_crop_interest = $request->vl_crop_interest;
    	$financiado ->vl_investment = $request->vl_investment;
    	$financiado ->vl_energy = $request->vl_energy;
    	$financiado ->vl_maintenance = $request->vl_maintenance;
    	$financiado ->vl_entry = $request->vl_entry;
    	$financiado ->vl_liquidation = $request->vl_liquidation;
    	$financiado ->vl_period_flow = $request->vl_period_flow;
    	$financiado ->vl_accumulated = $request->vl_accumulated;
    	$financiado ->client_id=$id_cliente;

    	$success = $financiado->save();

    	return $success;
    
    }

}
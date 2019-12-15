<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Artisan;
use App;
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
            'name' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:100'],
            'country_state' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'production' => ['required', 'numeric', 'max:20'],
            'culture' => ['required', 'string', 'max:45']
        ]);

        $client =new App\Client;

        $client ->user_id =Auth::id();
    	$client ->name = $request->name;
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
            return redirect('dashboard')->with('successRegister','Cliente registrado correctamente');
        }else{
            return redirect('dashboard')->with('errorRegister', 'Problemas al registrar cliente');
        }
    }

    public function flujoContado($request, $id_cliente ) {

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

    	/*$request->validate([
            'period' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:100'],
            'country_state' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'production' => ['required', 'integer', 'max:20'],
            'culture' => ['required', 'string', 'max:45']
        ]);*/

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
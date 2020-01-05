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

    public function guardar_cliente(Request $request) {
        //return $request->all();

        $request->validate([
            'client' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:100'],
            'country_state' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100'],
            'production' => ['required', 'numeric', 'digits_between:1,11'],
            'culture' => ['required', 'string', 'max:45'],
            //'discount_tax' => ['required', 'numeric']
        ]);

        $client = new App\Client;

        $client ->user_id =Auth::id();
        $client ->client = $request->client;
        $client ->address = $request->address;
        $client ->country_state = $request->country_state;
        $client ->email = $request->email;
        $client ->production = $request->production;
        $client ->culture = $request->culture;
        //$client->discount_tax = $request->discount_tax;

        $retorno = $client->save();
        $id_cliente = $client->id;

        if ($retorno) {
            $mensaje = 'Cliente guardado con exito. Prosiga para el flujo de contado.';
        } else {
            $mensaje = 'Problemas al guardar cliente. Repita la operación.';
        };
        return view('input_data_dashboard', compact('client', 'mensaje'));


        //$client = new App\Client;

        //$client ->user_id =Auth::id();
        //$id_cliente = $client->id;


        //$retorno_contado = $this->flujo_contado($request,  $id_cliente);
        //$retorno_financiado = $this->flujoFinanciado($request, $id_cliente);

        //if($retorno && $retorno_contado){
        //    return redirect('dashboard')->with('successRegister','Datos registrados correctamente');
            //return view('input_data_dashboard', compact('client'))->with('successRegister', 'Succeso al registrar cliente');
        //}else{
        //    return redirect('input_data_dashboard')->with('errorRegister', 'Problemas al insertar datos');
        //}
    }

    public function flujo_contado($request, $id_cliente) {

        // $request->validate([
        //     'period' => ['required', 'numeric', 'digits_between:1,10'],
        //     'vl_irrigation_sys' => ['required', 'numeric', 'digits_between:2,15'],
        //     'vl_investment' => ['required', 'numeric', 'digits_between:2,15'],
        //     'vl_energy' => ['required', 'numeric', 'digits_between:2,15'],
        //     'vl_maintenance' => ['required', 'numeric', 'digits_between:2,15'],
        //     'vl_entry' => ['required', 'numeric', 'digits_between:2,15'],
        //     'vl_liquidation' => ['required', 'numeric', 'digits_between:2,15'],
        //     'vl_period_flow' => ['required', 'numeric', 'digits_between:2,15'],
        //     'vl_accumulated' => ['required', 'numeric', 'digits_between:2,15'],    
        // ]);

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

        $retorno = $contado->save();

        if ($retorno) {
            $seccion = 'mensaje';
            $mensaje = 'Línea del flujo inserida.';
        } else {
            $seccion = 'mensaje_err';
            $mensaje = 'No fue posible inserir la línea del flujo. Repira la operación.';
        };
        return back()->with($seccion, $mensaje); //hay que ser back para no perder los datos del cliente
    }

    public function flujoFinanciado($request, $id_cliente ) {

        $request->validate([
            'period' => ['required', 'numeric', 'digits_between:1,10'],
            'vl_irrigation_sys' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_balance' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_investment' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_crop_interest' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_energy' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_maintenance' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_entry' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_liquidation' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_period_flow' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_accumulated' => ['required', 'numeric', 'digits_between:2,15'],
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

        $retorno = $financiado->save();

        if ($retorno) {
            $seccion = 'mensaje';
            $mensaje = 'Línea del flujo inserida.';
        } else {
            $seccion = 'mensaje_err';
            $mensaje = 'No fue posible inserir la línea del flujo. Repira la operación.';
        };
        return back()->with($seccion, $mensaje); //hay que ser back para no perder los datos del cliente
    
    }

}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Artisan;
use App;
use App\Http\Controllers\Redirect;

class DatosController extends Controller
{

    public function index() {
        return view('input_data_dashboard');
    }

    public function guardar_cliente(Request $request) {
        //return $request->all();

        $request->validate([
            'client' => ['required', 'string', 'max:100', 'regex:/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/'],
            'address' => ['required', 'string', 'max:100', 'regex:/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/'],
            'country_state' => ['required', 'string', 'max:100', 'regex:/[0-9]/', 'in:1,2,3,4,5,6,7,8,9,10,11,12,14,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32'],
            'email' => ['required', 'string', 'email', 'max:100'],
            'production' => ['required', 'numeric', 'digits_between:1,11', 'regex:/[0-9]/'],
            'culture' => ['required', 'string', 'max:45','regex:/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/'],
            'discount_tax' => ['required', 'numeric', 'regex:/[0-9]/', 'digits_between:1,11']
        ]);

        $client = new App\Client;

        $client ->user_id =Auth::id();
        $client ->client = $request->client;
        $client ->address = $request->address;
        $client ->country_state = $request->country_state;
        $client ->email = $request->email;
        $client ->production = $request->production;
        $client ->culture = $request->culture;
        $client->discount_tax = $request->discount_tax;

        $retorno = $client->save();
        $id_cliente = $client->id;

        if ($retorno) {
            $mensaje = 'Cliente guardado con exito. Continue agregando los flujos contado y financiado.';
        } else {
            $mensaje = 'Problemas al guardar cliente. Repita la operación.';
        };
        return view('input_data_dashboard', compact('client', 'mensaje'));

    }

}
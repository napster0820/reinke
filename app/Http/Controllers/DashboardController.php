<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;

class DashboardController extends Controller
{
    public function index() {
    	return view('dashboard');
    }

    //public function guardar_cliente($cliente) {
    //	null;
    //}

    public function buscar_historial() {
    	$user_id = Auth::id();
    	$clients = App\User::find($user_id)->clients;
    	return view('history', compact('clients'));
    }

    public function editar($id) {
    	$client = App\Client::findOrFail($id);
    	return view('edit_data_dashboard', compact('client'));
    }
    
    public function update(Request $request, $id) {

    	$clientUpdate = App\Client::findOrFail($id);
    	$clientUpdate->name = $request->name;
    	$clientUpdate->address = $request->address;

    	$sucess = $clientUpdate->save();

    	if ($sucess) {
    		return view('dashboard');
    	};
    }
}

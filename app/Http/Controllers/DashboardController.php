<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Artisan;
use App;

class DashboardController extends Controller
{
    public function index() {
    //public function index($id) {
        //$client = App\Client::findOrFail($id);
    	//return view('dashboard', compact('client'));

        return view('dashboard');
    }

    public function buscar_historial() {
    	$user_id = Auth::id();
    	$clients = App\User::find($user_id)->clients;
    	return view('history', compact('clients'));
    }

    public function editar($id) {
    	$client = App\Client::findOrFail($id);
    	return view('input_data_dashboard', compact('client'));
    }
    
    public function update(Request $request, $id) {

    	$clientUpdate = App\Client::findOrFail($id);
    	$clientUpdate->name = $request->name;
    	$clientUpdate->address = $request->address;
    	$clientUpdate->touch();

    	$success = $clientUpdate->save();

    	if ($success) {
    		return view('dashboard');
    	}
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
		echo'Datos restringidos';
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
}

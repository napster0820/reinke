<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Artisan;
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
    	$clientUpdate->touch();

    	$success = $clientUpdate->save();

    	if ($success) {
    		return view('dashboard');
<<<<<<< HEAD
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
=======
    	};
    }
>>>>>>> 694749817c239d29f695631cf474c1db3a805c12

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

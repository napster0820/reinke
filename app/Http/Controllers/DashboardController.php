<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    	$clients = App\Client::all();
    	return view('history', compact('clients'));
    }
}

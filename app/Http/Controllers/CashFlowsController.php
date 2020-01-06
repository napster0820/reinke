<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cash_flow;
use App\Client;
use Validator;
use Illuminate\Support\Facades\DB;

class CashFlowsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        if(request()->ajax())
        {
            return datatables()->of(DB::table('cash_flows')->get())
                //->addColumn('action', function($data){
                    //$button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-warning btn-sm">Editar</button>';
                    //$button .= '&nbsp;&nbsp;';
                    //$button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Eliminar</button>';
                    //return $button;
                //})
                //->rawColumns(['action'])
                ->make(true);
            
        }
        return view('input_data_dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'period' => ['required', 'numeric', 'digits_between:1,10'],
            'vl_irrigation_sys' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_investment' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_energy' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_maintenance' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_entry' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_liquidation' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_period_flow' => ['required', 'numeric'],
            'vl_accumulated' => ['required', 'numeric'],
            'id_client' => ['required']
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'period' => $request->period,
            'vl_irrigation_sys' => $request->vl_irrigation_sys,
            'vl_investment'   => $request->vl_investment,
            'vl_energy'   => $request->vl_energy,
            'vl_maintenance'  => $request->vl_maintenance,
            'vl_entry'    => $request->vl_entry,
            'vl_liquidation'  => $request->vl_liquidation,
            'vl_period_flow'  => $request->vl_period_flow,
            'vl_accumulated' => $request->vl_accumulated,
            'client_id'  =>$request->client_id
        );
        Cash_flow::create($form_data);

        return response()->json(['success' => 'Periodo registrado correctamente.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

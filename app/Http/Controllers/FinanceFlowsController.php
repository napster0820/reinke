<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Finance_flow;
use App\Client;
use Validator;

class FinanceFlowsController extends Controller
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
            return datatables()->of(Finance_flow::latest()->get())
                    //->addColumn('action', function($data){
                        //$button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Editar</button>';
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
            'periodF' => ['required', 'numeric', 'digits_between:1,10'],
            'vl_irrigation_sysF' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_balanceF'    => ['required', 'numeric', 'digits_between:2,15'], 
            'vl_crop_interestF'  => ['required', 'numeric', 'digits_between:2,15'],
            'vl_investmentF' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_energyF' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_maintenanceF' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_entryF' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_liquidationF' => ['required', 'numeric', 'digits_between:2,15'],
            'vl_period_flowF' => ['required', 'numeric'],
<<<<<<< HEAD
            'vl_accumulatedF' => ['required', 'numeric'],   
            //'client_id2' => ['required'] 
=======
            'vl_accumulatedF' => ['required', 'numeric']
>>>>>>> 196f21a70e5f05a77e54d9df86d7133aa346c6f9
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'period' => $request->periodF,
            'vl_irrigation_sys' => $request->vl_irrigation_sysF,
            'vl_balance'    => $request->vl_balanceF,
            'vl_crop_interest'  => $request->vl_crop_interestF,
            'vl_investment'   => $request->vl_investmentF,
            'vl_energy'   => $request->vl_energyF,
            'vl_maintenance'  => $request->vl_maintenanceF,
            'vl_entry'    => $request->vl_entryF,
            'vl_liquidation'  => $request->vl_liquidationF,
            'vl_period_flow'  => $request->vl_period_flowF,
            'vl_accumulated' => $request->vl_accumulatedF,
            'client_id'  =>$request->client_id2
        );

        Finance_flow::create($form_data);

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

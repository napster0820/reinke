@extends('layout.app')

@section('title', 'Datos')

@section('cdn-css')
    @parent 
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <br>
    <div class="dashboard container">
       <form action="{{ url('datos') }}" method="POST">
            @csrf
            @include('alerts.message_register_errors')
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <h5 class="card-header">Datos Cliente</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="inputCliente" class="col-sm-3 col-form-label">Cliente:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputCliente" placeholder="Cliente" name="client" value="{{old('client') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDireccion" class="col-sm-3 col-form-label">Dirección:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputDireccion" placeholder="Dirección" name="address" value="{{old('address') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEstado" class="col-sm-3 col-form-label">Estado:</label>
                                        <div class="col-sm-9">
                                            <select id="inputEstado" class="form-control" name="country_state" value="{{old('country_state') }}">
                                                <option value="0">Seleccione...</option>
                                                <option value="1">Aguascalientes</option>
                                                <option value="2">Baja California</option>
                                                <option value="3">Baja California Sur</option>
                                                <option value="4">Campeche</option>
                                                <option value="5">Coahuila de Zaragoza</option>
                                                <option value="6">Colima</option>
                                                <option value="7">Chiapas</option>
                                                <option value="8">Chihuahua</option>
                                                <option value="9">Distrito Federal</option>
                                                <option value="10">Durango</option>
                                                <option value="11">Guanajuato</option>
                                                <option value="12">Guerrero</option>
                                                <option value="13">Hidalgo</option>
                                                <option value="14">Jalisco</option>
                                                <option value="15">México</option>
                                                <option value="16">Michoacán de Ocampo</option>
                                                <option value="17">Morelos</option>
                                                <option value="18">Nayarit</option>
                                                <option value="19">Nuevo León</option>
                                                <option value="20">Oaxaca</option>
                                                <option value="21">Puebla</option>
                                                <option value="22">Querétaro</option>
                                                <option value="23">Quintana Roo</option>
                                                <option value="24">San Luis Potosí</option>
                                                <option value="25">Sinaloa</option>
                                                <option value="26">Sonora</option>
                                                <option value="27">Tabasco</option>
                                                <option value="28">Tamaulipas</option>
                                                <option value="29">Tlaxcala</option>
                                                <option value="30">Veracruz</option>
                                                <option value="31">Yucatán</option>
                                                <option value="32">Zacatecas</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="inputTon" class="col-sm-6 col-form-label">Producción estimada o (TonlHc):</label>
                                        <div class="col-sm-6">
                                            <input type="number" step="any" class="form-control" id="inputTon" placeholder="(TonlHc)" name="production" value="{{old('production') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputCultivo" class="col-sm-3 col-form-label">Cultivo:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputCultivo" placeholder="Cultivo" name="culture" value="{{old('culture') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-3 col-form-label">Email:</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{old('email') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button id="btn_generarDash" class="btn btn-primary float-right" type="submit">Guardar cliente</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>

    <div class="Flujo Contado container">
       <form action="{{ url('datos') }}" method="POST">
        @csrf
        @include('alerts.message_register_errors')
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Datos de los flujos</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="card-title">Flujo contado</h5>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Añadir periodo</button>
                                <div>
                                <table class="table table-inverse">
                                    <thead>
                                    <tr>
                                        <th>Periodo</th>
                                        <th>Sistema de riego ($)</th>
                                        <th>Inversión cultivo ($)</th>
                                        <th>Energía ($)</th>
                                        <th>Mantenimiento ($)</th>
                                        <th>Ingreso ($)</th>
                                        <th>Liquidación ($)</th>
                                        <th>Flujo por periodo ($)</th>
                                        <th>Acumulado ($)</th>
                                        </tr>
                                    </thead>
                                    
                                    <div id="myModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Datos del Periodo</h4>
                                        </div>
                                        <div class="form-group row">
                                        <label for="inputCliente" class="col-sm-3 col-form-label">Periodo:</label>
                                        <div class="col-sm-9">
                                            <input style="width:10%!important" type="text" id="row-period" name="period1" value="1" readonly>
                                        </div>
                                        <div class="form-group row">
                                        <label for="inputCliente" class="col-sm-3 col-form-label">Sistema de riego ($):</label>
                                        <div class="col-sm-9">
                                            <input style="width:30%!important" type="number" step="any" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value="{{old('vl_irrigation_sys') }}">
                                        </div>
                                        <div class="form-group row">
                                        <label for="inputCliente" class="col-sm-3 col-form-label">Inversion cultivo($):</label>
                                        <div class="col-sm-9">
                                            <input style="width:30%!important" type="number" step="any" id="row-1-vl_investment" name="vl_investment" value="{{old('vl_investment') }}">
                                        </div>

                                        <div class="form-group row">
                                        <label for="inputCliente" class="col-sm-3 col-form-label">Energia ($):</label>
                                        <div class="col-sm-9">
                                            <input style="width:30%!important" type="number" step="any" id="row-1-vl_energy" name="vl_energy" value="{{old('vl_energy') }}" >
                                        </div>
                                        <div class="form-group row">
                                        <label for="inputCliente" class="col-sm-3 col-form-label">Mantenimiento ($):</label>
                                        <div class="col-sm-9">
                                            <input style="width:30%!important" type="number" step="any" id="row-1-vl_maintenance" name="vl_maintenance" value="0" readonly>
                                        </div>
                                        <div class="form-group row">
                                        <label for="inputCliente" class="col-sm-3 col-form-label">Ingreso ($):</label>
                                        <div class="col-sm-9">
                                            <input style="width:30%!important" type="number" step="any" id="row-1-vl_entry" name="vl_entry" value="{{old('vl_entry') }}" >
                                        </div>
                                        <div class="form-group row">
                                        <label for="inputCliente" class="col-sm-3 col-form-label">Liquidación ($):</label>
                                        <div class="col-sm-9">
                                            <input style="width:30%!important" type="number" step="any" id="row-1-vl_liquidation" name="vl_liquidation" value="{{old('vl_liquidation') }}">
                                        </div>
                                        <div class="form-group row">
                                        <label for="inputCliente" class="col-sm-3 col-form-label">Flujo por periodo ($):</label>
                                        <div class="col-sm-9">
                                            <input style="width:30%!important" type="number" step="any" id="row-1-vl_period_flow" name="vl_period_flow" value="{{old('vl_period_flow') }}">
                                        </div>
                                        <div class="form-group row">
                                        <label for="inputCliente" class="col-sm-3 col-form-label">Acumulado ($):</label>
                                        <div class="col-sm-9">
                                            <input style="width:30%!important" type="number" step="any" id="row-1-vl_accumulated" name="vl_accumulated" value="{{old('vl_accumulated') }}">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-save" value="add">Añadir</button>
                                        </div>

                                      </div>
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--
    <div class="Flujo Contado container">
       <form action="{{ url('datos') }}" method="POST">
        @csrf
        @include('alerts.message_register_errors')
            <div class="row">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h5 class="card-title">Flujo financiado</h5>
                        <table id="example2" class="display" style="width:100%!important">
                            <thead>
                                <tr>
                                    <th>Periodo</th>
                                    <th>Capital sistema de riego ($)</th>
                                    <th>Saldo insoluto ($)</th>
                                    <th>Interés sistema de riego ($)</th>
                                    <th>Inversíon cultivo ($)</th>
                                    <th>Energía ($)</th>
                                    <th>Mantenimiento ($)</th>
                                    <th>Ingreso ($)</th>
                                    <th>Liquidación ($)</th>
                                    <th>Flujo por periodo ($)</th>
                                    <th>Acumulado ($)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="1" readonly></td>
                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value="{{old('vl_irrigation_sys') }}"></td>
                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_balance" name="vl_balance" value="{{old('vl_balance') }}"></td>
                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_crop_interest" name="vl_crop_interest" value="{{old('vl_crop_interest') }}"></td>
                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_investment" name="vl_investment" value="{{old('vl_investment') }}"></td>
                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_energy" name="vl_energys" value="{{old('vl_energys') }}"></td> 
                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_maintenance" name="vl_maintenance" value="0" readonly></td>
                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_entry" name="vl_entry" value="{{old('vl_entry') }}"></td>
                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_liquidation" name="vl_liquidation" value="{{old('vl_liquidation') }}"></td>
                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_period_flow" name="vl_period_flow" value="{{old('vl_period_flow') }}"></td>
                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_accumulated" name="vl_accumulated" value="{{old('vl_accumulated') }}"></td>
                                </tr>
                                </table>                            
                            </div>
                            <button id="btn_generarDash" class="btn btn-primary float-right" type="submit">Guardar cliente</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>-->
@endsection

@section('js')
    @parent
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $(document).ready(function() {
                $('#example').DataTable();

                $('#example2').DataTable();
            });
        });
    </script>
@endsection
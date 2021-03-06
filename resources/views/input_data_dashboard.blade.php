@extends('layout.app')

@section('title', 'Datos')

@section('cdn-css')
@parent 
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection

@section('content')
<br>
<div class="dashboard container-fluid">
    <form action="{{ route('datos.guardar') }}" method="POST">
        @csrf
        @include('alerts.message_register_errors')
        {{--   Section one form generade dashborad   --}}
            <div class="card">
                <h5 class="card-header">
                   Datos Cliente
                </h5>
               <div class="card-body">
                @if (isset($mensaje))
                <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ $mensaje ?? ''}}
                    </div>
                @endif
                <input type="hidden" value="{{ csrf_token() }}" id="token">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputCliente" class="col-sm-3 col-form-label">Cliente:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputClient" placeholder="Cliente" name="client" value="{{old('client') }}" required pattern="^[/^\s/a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,100}"
                                title="Letras. Tamaño mínimo: 3. Tamaño máximo: 100">
                            </div>
                        </div>
                    </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="inputTon" class="col-sm-6 col-form-label">Producción estimada o (TonlHc):</label>
                        <div class="col-sm-6">
                            <input type="number" step="any" class="form-control" id="inputProduction" placeholder="(TonlHc)" name="production" value="{{old('production') }}" min="1" minlength="1" maxlength="11" required pattern="^[0-9]+" title="Números. Tamaño mínimo: 1. Tamaño máximo: 11">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="inputDireccion" class="col-sm-3 col-form-label">Dirección:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputAddress" placeholder="Dirección" name="address" value="{{old('address') }}" minlength="1" maxlength="100" required pattern="[/^\s/a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,100}" title="Letras. Tamaño mínimo: 1. Tamaño máximo: 100">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="inputCultivo" class="col-sm-3 col-form-label">Cultivo:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputCulture" placeholder="Cultivo" name="culture" value="{{old('culture') }}" minlength="1" maxlength="45" required pattern="[/^\s/a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,100}"" title="Letras. Tamaño mínimo: 1. Tamaño máximo: 45">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="inputEstado" class="col-sm-3 col-form-label">Estado:</label>
                        <div class="col-sm-9">
                            <select id="inputState" class="form-control" name="country_state" value="{{old('country_state') }}"required>
                                <option value="">Seleccione...</option>
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
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Correo eletrónico:</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Correo eletrónico" name="email" value="{{old('email') }}" required maxlength="100" pattern="[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z.-]+">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="inputDiscountTax" class="col-sm-3 col-form-label">Tasa Descuento (%):</label>
                        <div class="col-sm-9">
                            <input type="number"  class="form-control" id="inputDiscountTax" placeholder="Tasa Descuento" name="discount_tax" value="{{old('discount_tax') }}" required min="1" minlength="1" maxlength="11" title="Números. Tamaño mínimo: 1. Tamaño máximo: 11">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <button id="btn_saveClient" class="btn btn-success btn-sm">Guardar Cliente</button>
                </div>
            </div> 
        </div>  
        <div>
        </form>
    </div>
</div>

{{-- Section flow cash --}}
<br/>
<div class="card">
    <h5 class="card-header">Datos de los flujos @if($client ?? '') del cliente: <b>{{ $client->client }}</b> @endif</h5>
    <div class="card-body">
        <h5 class="card-title">Flujo de contado</h5>  
        <div class="row">
            <div class="col-md-6">
                <button type="button" name="create_cash_flow" id="create_cash_flow" class="btn btn-success btn-sm">Crear Nuevo Periodo</button>
            </div>    
        </div>    
        <div id="formModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Añadir nuevo periodo contado</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>  
                    <div class="modal-body">
                        <span id="form-result"></span>
                        <form method="post" id="form_cash_flow" enctype="multipart/form-data" class="form-horizontal">
                            @csrf 
                            @include('alerts.message_cashflow_errors')    
                            <div id='e_div'>
                                <p id='er_div'></p>
                            </div>     
                            <input type="hidden" class="hidden" id="client_id" name="client_id" readonly="readonly" value="@if($client ?? ''){{ $client->id }}@endif">
                            <div class="form-group">
                                <label for="inputPeriod" class="col-form-label" >Período:</label>
                                <select id="period" class="form-control" name="period" required>
                                    <option value="" >Seleccione...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputCashFlow" class="col-form-label">Sistema de riego ($):</label>
                                <input type="number" class="form-control" id="vl_irrigation_sys" name="vl_irrigation_sys" value="{{old('vl_irrigation_sys') }}" required  min="10" minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15" >
                            </div>
                            <div class="form-group">
                                <label for="inputCashFlow" class="col-form-label">Inversion cultivo ($):</label>
                                <input type="number" class="form-control" id="vl_investment" name="vl_investment" value="{{old('vl_investment') }}" required  min="10" pattern="^(\d|-)?(\d|,)*\.?\d*$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            <div class="form-group">
                                <label for="inputCashFlow" class="col-form-label">Energía ($):</label>
                                <input type="number" class="form-control" id="vl_energy" name="vl_energy" value="{{old('vl_energy') }}" required  min="10" pattern="^(\d|-)?(\d|,)*\.?\d*$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            <div class="form-group">
                                <label for="inputCashFlow" class="col-form-label">Mantenimiento ($):</label>
                                <input type="number" class="form-control" id="vl_maintenance" name="vl_maintenance" value="{{old('vl_maintenance') }}" required  min="10" pattern="^(\d|-)?(\d|,)*\.?\d*$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            <div class="form-group">
                                <label for="inputCashFlow" class="col-form-label">Ingreso ($):</label>
                                <input type="number" class="form-control" id="vl_entry" name="vl_entry" value="{{old('vl_entry') }}" required  min="10" pattern="^(\d|-)?(\d|,)*\.?\d*$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            <div class="form-group">
                                <label for="inputCashFlow" class="col-form-label">Liquidación ($):</label>
                                <input type="number" class="form-control" id="vl_liquidation" name="vl_liquidation" value="{{old('vl_liquidation') }}" required  min="10" pattern="^(\d|-)?(\d|,)*\.?\d*$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            <div class="form-group">
                                <label for="inputCashFlow" class="col-form-label">Flujo por período ($):</label>
                                <input type="number" class="form-control" id="vl_period_flow" name="vl_period_flow" value="{{old('vl_period_flow') }}" required  pattern="^-?\d{1,9}(\.\d{1,2})?$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            <div class="form-group">
                                <label for="inputCashFlow" class="col-form-label">Acumulado ($):</label>
                                <input type="number" class="form-control" id="vl_accumulated" name="vl_accumulated" value="{{old('vl_accumulated') }}" required  pattern="^-?\d{1,9}(\.\d{1,2})?$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="hidden_id" id="hidden_id" />
                                <input type="hidden" name="hidden_client_id" id="hidden_client_id" />
                                <input type="submit" name="action_button" id="action_button" class="btn btn-primary" value="Add"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="cashFlowTable" class="display" style="width:100%">
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
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
    {{-- Section flow finance --}}
    <br/>
    <div class="card-body">
        <h5 class="card-title">Flujo financiado</h5>  
        <div class="row">
            <div class="col-md-6">
                <button type="button" name="create_finance_flow" id="create_finance_flow" class="btn btn-success btn-sm">Crear Nuevo Periodo</button>
            </div>    
        </div>    
        {{-- Section modal --}}
        <div id="formModalF" class="modal fade" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Añadir nuevo periodo financiado</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>  
                    <div class="modal-body">
                        <span id="form-result"></span>
                        <form method="post" id="form_finance_flow" enctype="multipart/form-data" class="form-horizontal">
                            @csrf  
                            @include('alerts.message_financeflows_errors')
                            <div id='ef_div'>
                                <p id='erf_div'></p>
                            </div>
                            <input type="hidden" class="hidden" id="client_id2" name="client_id2" readonly="readonly" value="@if($client ?? ''){{ $client->id }}@endif">             
                            <div class="form-group">
                                <label for="inputPeriod" class="col-form-label" >Período:</label>
                                <select id="periodF" class="form-control" name="periodF" required>
                                    <option value="" >Seleccione...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputFinanceFlow" class="col-form-label">Sistema de riego ($):</label>
                                <input type="number" class="form-control" id="vl_irrigation_sysF" name="vl_irrigation_sysF" value="{{old('vl_irrigation_sysF') }}" required  min="10" pattern="^(\d|-)?(\d|,)*\.?\d*$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            <div class="form-group">
                                <label for="inputFinanceFlow" class="col-form-label">Saldo insoluto ($):</label>
                                <input type="number" class="form-control" id="vl_balanceF" name="vl_balanceF" value="{{old('vl_balanceF') }}" required  min="10" pattern="^(\d|-)?(\d|,)*\.?\d*$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            
                            <div class="form-group">
                                <label for="inputFinanceFlow" class="col-form-label">Interés sistema riego ($):</label>
                                <input type="number" class="form-control" id="vl_crop_interestF" name="vl_crop_interestF" value="{{old('vl_crop_interestF') }}" required  min="10" pattern="^(\d|-)?(\d|,)*\.?\d*$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            
                            <div class="form-group">
                                <label for="inputFinanceFlow" class="col-form-label">Inversion cultivo ($):</label>
                                <input type="number" class="form-control" id="vl_investmentF" name="vl_investmentF" value="{{old('vl_investmentF') }}" required  min="10" pattern="^(\d|-)?(\d|,)*\.?\d*$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            
                            <div class="form-group">
                                <label for="inputFinanceFlow" class="col-form-label">Energía ($):</label>
                                <input type="number" class="form-control" id="vl_energyF" name="vl_energyF" value="{{old('vl_energyF') }}" required  min="10" pattern="^(\d|-)?(\d|,)*\.?\d*$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            
                            <div class="form-group">
                                <label for="inputFinanceFlow" class="col-form-label">Mantenimiento ($):</label>
                                <input type="number" class="form-control" id="vl_maintenanceF" name="vl_maintenanceF" value="{{old('vl_maintenanceF') }}" required  min="10" pattern="^(\d|-)?(\d|,)*\.?\d*$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            

                            <div class="form-group">
                                <label for="inputFinanceFlow" class="col-form-label">Ingreso ($):</label>
                                <input type="number" class="form-control" id="vl_entryF" name="vl_entryF" value="{{old('vl_entryF') }}" required  min="10" pattern="^(\d|-)?(\d|,)*\.?\d*$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            
                            <div class="form-group">
                                <label for="inputFinanceFlow" class="col-form-label">Liquidación ($):</label>
                                <input type="number" class="form-control" id="vl_liquidationF" name="vl_liquidationF" value="{{old('vl_liquidationF') }}" required  min="10" pattern="^(\d|-)?(\d|,)*\.?\d*$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            
                            <div class="form-group">
                                <label for="inputFinanceFlow" class="col-form-label">Flujo por período ($):</label>
                                <input type="number" class="form-control" id="vl_period_flowF" name="vl_period_flowF" value="{{old('vl_period_flowF') }}" required pattern="^-?\d{1,9}(\.\d{1,2})?$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            
                            <div class="form-group">
                                <label for="inputFinanceFlow" class="col-form-label">Acumulado ($):</label>
                                <input type="number" class="form-control" id="vl_accumulatedF" name="vl_accumulatedF" value="{{old('vl_accumulatedF') }}" required pattern="^-?\d{1,9}(\.\d{1,2})?$"  minlength="2" maxlength="15" title="Números. Tamaño mínimo: 2. Tamaño máximo: 15">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="hidden_id2" id="hidden_id2" />
                                <input type="hidden" name="hidden_client_id2" id="hidden_client_id2" />
                                <input type="submit" name="action_button2" id="action_button2" class="btn btn-primary" value="Add"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="financeFlowTable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Periodo</th>
                            <th>Sistema de riego ($)</th>
                            <th>Saldo insoluto ($)</th>
                            <th>Interés sistema riego ($)</th>
                            <th>Inversión cultivo ($)</th>
                            <th>Energía ($)</th>
                            <th>Mantenimiento ($)</th>
                            <th>Ingreso ($)</th>
                            <th>Liquidación ($)</th>
                            <th>Flujo por periodo ($)</th>
                            <th>Acumulado ($)</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
//Cash Flow
$('#create_cash_flow').click(function(){
    $('.modal-title').text("Añadir nuevo periodo");
    $('#action_button').val("Add");
    $('#action').val("Add");
    $('#formModal').modal();
});

$('#form_cash_flow').on('submit', function(){
    event.preventDefault();
            $.ajax({
                url: "{{ route('cashflows.store') }}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: "json",
                success: function(data) 
                {                    
                    var html = '';
                    if(data.errors)
                    {   
                        html = '<div class="alert alert-danger">';
                        html += '<p>' + data.errors + '</p>';
                        html += '</div>';
                        $('#e_div').text("");
                        $('#e_div').append(html);
                        console.log(data);
                    }
                    if (data.success) 
                    {
                        html = '<div class="alert alert-success">' + data.success + '</div>';
                        $('#e_div').text("");
                        $('#e_div').append(html);
                        $('#form_cash_flow')[0].reset(); //limpar todo valor del formulario
                        $('#cashFlowTable').DataTable().ajax.reload(); //refresh la tabla
                    }
                    $('#form_result').html(html); //display las mensajes
                }
            });
    });

    //Finance Flow
    $('#create_finance_flow').click(function(){
        $('.modal-title').text("Añadir nuevo periodo");
        $('#action_button').val("Add");
        $('#action').val("Add");
        $('#formModalF').modal();
    });
    $('#form_finance_flow').on('submit', function(event){
        event.preventDefault();
            $.ajax({
                url: "{{ route('financeflows.store') }}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: "json",
                success: function(data)
                {
                    console.log(data);
                    var html = '';
                    if(data.errors)
                    {
                        html = '<div class="alert alert-danger">';
                        html += '<p>' + data.errors + '</p>';
                        html += '</div>';
                        $('#ef_div').text("");
                        $('#ef_div').append(html);
                    }
                    if (data.success) 
                    {
                        html = '<div class="alert alert-success">' + data.success + '</div>';
                        $('#ef_div').text("");
                        $('#ef_div').append(html);
                        $('#form_finance_flow')[0].reset(); //limpar todo valor do formulario
                        $('#financeFlowTable').DataTable().ajax.reload(); //refresh la tabla
                    }
                    $('#form_result').html(html); //display las mensajes
                }
            });
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="js/main_create_data_flow.js"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            $('#cashFlowTable').DataTable(
            {   
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('cashflows.index', $client ?? '') }}"
                },
                columns: [
                {
                    data: 'period',
                    name: 'period'
                },
                {
                    data: 'vl_irrigation_sys',
                    name: 'vl_irrigation_sys'
                },
                {
                    data: 'vl_investment',
                    name: 'vl_investment'
                },
                {
                    data: 'vl_energy',
                    name: 'vl_energy'
                },
                {
                    data: 'vl_maintenance',
                    name: 'vl_maintenance'
                },
                {
                    data: 'vl_entry',
                    name: 'vl_entry'
                },
                {
                    data: 'vl_liquidation',
                    name: 'vl_liquidation'
                },
                {
                    data: 'vl_period_flow',
                    name: 'vl_period_flow'
                },
                {
                    data: 'vl_accumulated',
                    name: 'vl_accumulated'
                }
                ],
                language: {
                    "decimal": "",
                    "emptyTable": "No hay registros en la tabla",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total registros)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Registros",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });

        // Finance flow
        $('#financeFlowTable').DataTable(
        {   
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('financeflows.index', $client ?? '') }}"
            },
            columns: [
            {
                data: 'period',
                name: 'period'
            },
            {
                data: 'vl_irrigation_sys',
                name: 'vl_irrigation_sys'
            },
            {
                data: 'vl_balance',
                name: 'vl_balance'
            },
            {
                data: 'vl_crop_interest',
                name: 'vl_crop_interest'
            },
            {
                data: 'vl_investment',
                name: 'vl_investment'
            },
            {
                data: 'vl_energy',
                name: 'vl_energy'
            },
            {
                data: 'vl_maintenance',
                name: 'vl_maintenance'
            },
            {
                data: 'vl_entry',
                name: 'vl_entry'
            },
            {
                data: 'vl_liquidation',
                name: 'vl_liquidation'
            },
            {
                data: 'vl_period_flow',
                name: 'vl_period_flow'
            },
            {
                data: 'vl_accumulated',
                name: 'vl_accumulated'
            }
            ],
            language: {
                "decimal": "",
                "emptyTable": "No hay registros en la tabla",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total registros)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Registros",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        }); 
    });
</script>
@endsection

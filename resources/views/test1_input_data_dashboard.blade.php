@extends('layout.app')

@section('title', 'Datos')

@section('cdn-css')
    @parent 
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection  

@section('content')
<br>
<div class="dashboard container-fluid">
    <form action="{{ url('datos/') }}/guardarCliente" method="POST">
        @csrf
        @include('alerts.message_register_errors')
        {{-- 
            Section one form generade dashborad
            --}}
        <div class="card">
            <div class="card-header">
                Datos Cliente
            </div>
            <div class="card-body">
                <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <p id="msg_client"></p>
                </div>
                <input type="hidden" value="{{ csrf_token() }}" id="token">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputCliente" class="col-sm-3 col-form-label">Cliente:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputClient" placeholder="Cliente" name="client" value="{{old('client') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputTon" class="col-sm-6 col-form-label">Producción estimada o (TonlHc):</label>
                            <div class="col-sm-6">
                                <input type="number" step="any" class="form-control" id="inputProduction" placeholder="(TonlHc)" name="production" value="{{old('production') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputDireccion" class="col-sm-3 col-form-label">Dirección:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputAddress" placeholder="Dirección" name="address" value="{{old('address') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputCultivo" class="col-sm-3 col-form-label">Cultivo:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputCulture" placeholder="Cultivo" name="culture" value="{{old('culture') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputEstado" class="col-sm-3 col-form-label">Estado:</label>
                            <div class="col-sm-9">
                                <select id="inputState" class="form-control" name="country_state" value="{{old('country_state') }}">
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
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-3 col-form-label">Correo eletrónico:</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Correo eletrónico" name="email" value="{{old('email') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputDiscountTax" class="col-sm-3 col-form-label">Tasa Descuento (%):</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputDiscountTax" placeholder="Tasa Descuento" name="discount_tax" value="{{old('discount_tax') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button id="btn_saveClient" class="btn btn-primary">Guardar Cliente</button>
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
    <h5 class="card-header">Datos de los flujos</h5>
        <div class="card-body">
        <h5 class="card-title">Flujo de contado</h5>  
        <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputPeriod" class="col-sm-3 col-form-label">Periodo:</label>
                            <div class="col-sm-9">
                                <select id="period" class="form-control" name="period">
                                    <option value="0" selected>Seleccione...</option>
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
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputCashFlow" class="col-sm-3 col-form-label">Sistema de riego ($):</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="vl_irrigation_sys" name="vl_irrigation_sys" value="{{old('vl_irrigation_sys') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputCashFlow" class="col-sm-3 col-form-label">Inversion cultivo ($):</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="vl_investment" name="vl_investment" value="{{old('vl_investment') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputCashFlow" class="col-sm-3 col-form-label">Energia ($):</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="vl_energy" name="vl_energy" value="{{old('vl_energy') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputCashFlow" class="col-sm-3 col-form-label">Mantenimiento ($):</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="vl_maintenance" name="vl_maintenance" value="{{old('vl_maintenance') }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputCashFlow" class="col-sm-3 col-form-label">Ingreso ($):</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="vl_entry" name="vl_entry" value="{{old('vl_entry') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputCashFlow" class="col-sm-3 col-form-label">Liquidación ($):</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="vl_liquidation" name="vl_liquidation" value="{{old('vl_liquidation') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputCashFlow" class="col-sm-3 col-form-label">Flujo por periodo ($):</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="vl_period_flow" name="vl_period_flow" value="{{old('vl_period_flow') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputCashFlow" class="col-sm-3 col-form-label">Acumulado ($):</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="vl_accumulated" name="vl_accumulated" value="{{old('vl_accumulated') }}">
                            </div>
                        </div>
                    </div>
                    
                </br>
                <div class="modal-footer">

                 @if (session('mensaje'))
                 <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ session('mensaje') }}
                </div>
                @endif
                @if (session('mensaje_err'))
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ session('mensaje_err') }}
                </div>
                @endif

                <div class="row">
                    <div class="col-md-12">
                        <table id="dashboardList" class="display" style="width:100%">
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
                        @if(isset($items))
                            @foreach($items as $item)
                                <tr>
                                    <th scope="row"> {{$item->period}} </th>
                                    <td>{{$item->vl_irrigation_sys}}</td>
                                    <td>{{$item->vl_investment}}</td>
                                    <td>{{$item->vl_energy}}</td>
                                    <td>{{$item->vl_maintenance}}</td>
                                    <td>{{$item->vl_entry}}</td>
                                    <td>{{$item->vl_liquidation}}</td>
                                    <td>{{$item->vl_period_flow}}</td>
                                    <td>{{$item->vl_accumulated}}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                        <tfoot>
                            <tr>
                              <td>Total:</td>
                              <td >$ <span id="result_irrigation">0</span></td>
                          </tr>
                      </tfoot>
                  </table>
              </div>

              <div class="col-md-6">
                <button id="btn_generarDash" class="btn btn-primary" type="submit">Guardar Dato</button>
            </div>

        </div>
    </div>        



</div> 
</div>  
<div>
</div>

</div>
</div>
</div>



@endsection

@section('js')
@parent
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#msg_client").hide();

        $("#btn_saveClient").click(function() {
            $("#msg_client").show();

            //guardar las variables cuando clicar en el btn_saveClient
            var inputClient = $("#inputClient").val();
            var inputProduction = $("#inputProduction").val();
            var inputAddress = $("#inputAddress").val();
            var inputCulture = $("#inputCulture").val();
            var inputState = $("#inputState").val();
            var inputEmail = $("#inputEmail").val();
            var inputDiscountTax = $("#inputDiscountTax").val();
            var token = $("#token").val();

            $.ajax({
                type: "post",
                data: "inputClient=" + inputClient + 
                    "&inputProduction=" + inputProduction + 
                    "&inputAddress=" + inputAddress + 
                    "&inputCulture=" + inputCulture + 
                    "&inputState=" + inputState + 
                    "&inputEmail=" + inputEmail + 
                    "&inputDiscountTax=" + inputDiscountTax + 
                    "&_token=" + token,
                url: "<?php echo url('/datos/guardarCliente') ?>",
                success: function(data){
                    $("#msg_client").html("Cliente inserido en la base.");
                    $("#msg").fadeOut(5000);
                }
            });
        });
    });
</script>  
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<!--script src="js/main_create_data_flow.js"></script-->
<script type="text/javascript">
    $(document).ready(function(){
        $('#dashboardList').DataTable({
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
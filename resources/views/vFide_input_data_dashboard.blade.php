@extends('layout.app')

@section('title', 'Datos')

@section('cdn-css')
    @parent 
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <br>
    <div class="dashboard container-fluid">
        <form action="{{ url('datos') }}" method="POST">
            @csrf
            {{-- 
                Section one form generade dashborad
            --}}
            <div class="card">
                <div class="card-header">
                   Datos Cliente
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="inputCliente" class="col-sm-3 col-form-label">Cliente:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputCliente" placeholder="Cliente" name="client" value="{{old('client') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="inputTon" class="col-sm-6 col-form-label">Producción estimada o (TonlHc):</label>
                                <div class="col-sm-6">
                                    <input type="number" step="any" class="form-control" id="inputTon" placeholder="(TonlHc)" name="production" value="{{old('production') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="inputDireccion" class="col-sm-3 col-form-label">Dirección:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputDireccion" placeholder="Dirección" name="address" value="{{old('address') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="inputCultivo" class="col-sm-3 col-form-label">Cultivo:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputCultivo" placeholder="Cultivo" name="culture" value="{{old('culture') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
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
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-3 col-form-label">Email:</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{old('email') }}">
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>  
            <div>
        </div>
    </div>
             {{-- 
                Section flow cash
            --}}
            <br/>
            <div class="card">
                <h5 class="card-header">Datos de los flujos</h5>
                <div class="card-body">
                    <h5 class="card-title">Flujo de contado</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="input_periodos" class="col-sm-3 col-form-label">Número de periodos:</label>
                                <div class="col-sm-9">
                                    <select id="input_periodos" class="form-control" name="input_periodos">
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
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
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
                                    <tbody id="content_table_cash">
                                    
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                          <td>Total:</td>
                                          <td >$ <span id="result_irrigation">0</span></td>
                                        </tr>
                                      </tfoot>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>        
@endsection

@section('js')
    @parent
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="js/main_create_data_flow.js"></script>
@endsection
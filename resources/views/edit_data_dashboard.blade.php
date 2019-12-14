@extends('layout.app')

@section('title', 'Datos')

@section('cdn-css')
    @parent 
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <br>
    <div class="dashboard container">
       <form action="{{url('datos'}}" method="POST">
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
                                        <label for="inputCiente" class="col-sm-3 col-form-label">Cliente:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputCliente" name="name" placeholder="Cliente" value="{{ $client->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDireccion" class="col-sm-3 col-form-label">Dirección:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputDireccion" name="address" placeholder="Dirección" value="{{ $client->address }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEstado" class="col-sm-3 col-form-label">Estado:</label>
                                        <div class="col-sm-9">
                                            <select id="inputEstado" class="form-control">
                                                <option selected>Lorem...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="inputTon" class="col-sm-6 col-form-label">Producción estimada o (TonlHc):</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="inputTon" placeholder="s", value={{$tonelada}}>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDireccion" class="col-sm-3 col-form-label">Cultivo:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputDireccion" placeholder="Cultivo",value={{$cultivo}}>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-3 col-form-label">Email:</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email"value={{$email}}>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--a href="{{ url("dashboard") }}" class="btn btn-primary float-right">Generar Dashboard</a-->
            
            <button id="btn_update_client" class="btn btn-primary btn-block" type="submit">Actualizar Dashboard</button>

      </form>
    </div>
@endsection
            <!-------<br>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Datos del excel para los flujos</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="card-title">Flujo Financiado</h5>
                                    <table id="example" class="display" style="width:100%">
                                            <thead>
                                               
                                                <tr>
                                                    <th>Periodo</th>
                                                    <th>Capital sistema de riego</th>
                                                    <th>Saldo insoluto</th>
                                                    <th>Interés sistema de riego</th>
                                                    <th>Inversíon cultivo</th>
                                                    <th>Energía</th>
                                                    <th>Mantenimiento</th>
                                                    <th>Ingreso</th>
                                                     <th>Liquidación</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="card-title">Flujo contado</h5>
                                    <table id="example2" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Periodo</th>
                                                    <th>Sistema de riego</th>
                                                    <th>Inversíon cultivo</th>
                                                    <th>Energía</th>
                                                    <th>Mantenimiento</th>
                                                    <th>Ingreso</th>
                                                    <th>Liquidación</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>1505</td>
                                                    <td>$25,000</td>
                                                    <td>$8000</td>
                                                    <td>$12,000</td>
                                                    <td>$320,800</td>
                                                    <td>$320,800</td>                                                   
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>1505</td>
                                                    <td>$25,000</td>
                                                    <td>$8000</td>
                                                    <td>$12,000</td>
                                                    <td>$320,800</td>
                                                    <td>$320,800</td>  
                                                </tr>
                                                <tr>
                                                    <td>n</td>
                                                    <td>1505</td>
                                                    <td>$25,000</td>
                                                    <td>$8000</td>
                                                    <td>$12,000</td>
                                                    <td>$320,800</td>
                                                    <td>$320,800</td>  
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Periodo</th>
                                                    <th>Sistema de riego</th>
                                                    <th>Inversíon cultivo</th>
                                                    <th>Energía</th>
                                                    <th>Mantenimiento</th>
                                                    <th>Ingreso</th>
                                                    <th>Liquidación</th>
                                                </tr>
                                                    <tr>
                                                        <th>Periodo</th>
                                                        <th>Capital sistema de riego</th>
                                                        <th>Saldo insoluto</th>
                                                        <th>Interés sistema de riego</th>
                                                        <th>Inversíon cultivo</th>
                                                        <th>Energía</th>
                                                        <th>Mantenimiento</th>
                                                        <th>Ingreso</th>
                                                        <th>Liquidación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><input type="text" id="row-capsistema" name="capsistema" value=    gfds></td>
                                                        <td><input type="text" id="row-salinslto" name="salinslto" value="320,800"></td>
                                                        <td><input type="text" id="row-intsistema" name="intsistema" value="51% "></td>
                                                        <td><input type="text" id="row-invcultivo" name="invcultivo" value="2011/04/25  "></td>
                                                        <td><input type="text" id="row-energia" name="energia" value="320,800"></td>
                                                        <td><input type="text" id="row-mantennimit" name="mantennimit" value="320,800"></td>
                                                        <td><input type="text" id="row-ingr" name="ingr" value="320,800"></td>
                                                        <td><input type="text" id="row-liqui" name="liqui" value="320,800"></td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td>61%</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td>61%</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td>61%</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                            </tfoot>
                                        </table>
                                    <br>
                                    <br>
                                    <!--a href="{{ url("dashboard") }}" class="btn btn-primary float-right">Generar Dashboard</a-->
                                    <!----
                                    <button id="btn_update_client" class="btn btn-primary btn-block" type="submit">Actualizar Dashboard</button>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
       </form>
    </div>
@endsection

@section('scipts')
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

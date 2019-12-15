@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <h4>Tipo de flujo</h4>
                <div class="card">
                    <div class="card-body">
                       <div class="row">
                           <div class="col-6">
                                 <div class="form-radio">
                                    <input type="radio" name="tipo_flujo" class="form-radio-input" id="exampleRadio1" value="contado"  checked>
                                    <label class="form-radio-label" for="exampleRadio2">Contado</label>
                                </div>
                           </div>
                           <div class="col-6">
                               <div class="form-radio">
                                    <input type="radio" name="tipo_flujo" class="form-radio-input" id="exampleRadio2" value="financiado">
                                    <label class="form-radio-label" for="exampleRadio2">Financiado</label>
                                </div>
                           </div>
                       </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Cliente
                    </div>
                    <div class="card-body">
                        <p class="card-text">Cliente</p>
                        <p class="card-text">Dirección </p>
                        <p class="card-text">Estado</p>
                        <p class="card-text">Producción estimada</p>
                        <p class="card-text">Cultivo</p>
                    </div>
                </div>
                <br>
                <!--div class="card">
                    <div class="card-header">
                        Flujo
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center">Contado</h4>
                    </div>
                </div>
                <br-->
                <div class="card">
                    <div class="card-header">
                        Resumen de inversión  
                    </div>
                    <div class="card-body">
                        <p class="card-text">VPN inversión </p>
                        <p class="card-text">TIR inversión </p>
                        <p class="card-text">Tiempo recuperación </p>
                    </div>
                </div>  
                <br>        
            </div>
            <div class="col-8">
                <h4>Tipo de gráfico</h4>
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">Linea del tiempo</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">Gráfico de rentabilidad</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">Gráfico inversión  </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="home" class="container tab-pane active"><br>
                                <img class="img-fluid" src="images/linea_del_tiempo.png" alt="Liena del tiempo">
                                {{-- <p class="text-center">Seleccione el tipo de gráfico para generar aquí la información que desea visualizar </p> --}}
                            </div>
                            <div id="menu1" class="container tab-pane fade"><br>
<<<<<<< HEAD
                                <canvas id="barTir"></canvas>
                            <input id="userActive" type="hidden" value="{{ Auth::id() }}" disabled>
=======
                                <img class="img-fluid" src="images/grafico_de_barras.png" alt="Barras">
>>>>>>> 694749817c239d29f695631cf474c1db3a805c12
                            </div>
                            <div id="menu2" class="container tab-pane fade"><br>
                                <canvas id="barExpenses"></canvas>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
@endsection
<<<<<<< HEAD

@section('js')
    @parent
    {{-- CDN chart.js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/main_dashboard.js"></script>
@endsection

=======
>>>>>>> 694749817c239d29f695631cf474c1db3a805c12
           
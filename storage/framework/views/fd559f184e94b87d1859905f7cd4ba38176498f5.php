<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('cdn-css'); ?>
    ##parent-placeholder-5bb9ffd2ab39aef3394577313745ed8c84198c0f##
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <h4>Tipo de flujo</h4>
                <div class="card">
                    <div class="card-body">
                       <div class="row">
                           <div class="col-6">
                                 <div class="form-radio">
                                    <input type="radio" name="tipo_flujo" class="form-radio-input" id="exampleRadio1" value="contado">
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
            <div class="col-9">
                <h4>Tipo de gráfico</h4>
                <div class="card">
                    <div class="card-body">
                        <!-- Navigation timeline -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home"><img src="" alt=""><img class="nav-timeline" src="images/line_images/timeline.png" alt=""></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1"><img class="nav-timeline" src="images/line_images/barras.png" alt=""></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2"><img class="nav-timeline" src="images/line_images/estadistica.png" alt=""></a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="home" class="container tab-pane active"><br>
                                <ul id="list-timeline" class="list-inline">
                                    <li class="list-inline-item btn-line"><img class="img-fluid" src="images/line_images/0.jpg" alt=""></li>
                                    <li class="list-inline-item btn-line"><img class="img-fluid" src="images/line_images/1.jpg" alt=""></li>
                                    <li class="list-inline-item btn-line"><img class="img-fluid" src="images/line_images/2.jpg" alt=""></li>
                                    <li class="list-inline-item btn-line"><img class="img-fluid" src="images/line_images/3.jpg" alt=""></li>
                                    <li class="list-inline-item btn-line"><img class="img-fluid" src="images/line_images/4.jpg" alt=""></li>
                                    <li class="list-inline-item btn-line"><img class="img-fluid" src="images/line_images/5.jpg" alt=""></li>
                                    <li class="list-inline-item btn-line"><img class="img-fluid" src="images/line_images/6.jpg" alt=""></li>
                                    <li class="list-inline-item btn-line"><img class="img-fluid" src="images/line_images/7.jpg" alt=""></li>
                                    <li class="list-inline-item btn-line"><img class="img-fluid" src="images/line_images/8.jpg" alt=""></li>
                                    <li class="list-inline-item btn-line"><img class="img-fluid" src="images/line_images/9.jpg" alt=""></li>
                                </ul>
                                <hr>
                                <div id="content-general" class="content"></div>
                            </div>
                            <div id="menu1" class="container tab-pane fade"><br>
                                <img class="img-fluid" src="images/grafico_de_barras.png" alt="Barras">
                            </div>
                            <div id="menu2" class="container tab-pane fade"><br>
                                <img class="img-fluid" src="images/grafico_de_gastos.png" alt="Barras">
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    ##parent-placeholder-93f8bb0eb2c659b85694486c41717eaf0fe23cd4##
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="js/main_dashboard.js"></script>
<?php $__env->stopSection(); ?>

           
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reinke\resources\views/dashboard.blade.php ENDPATH**/ ?>
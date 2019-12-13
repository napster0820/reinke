<?php $__env->startSection('title', 'Datos'); ?>

<?php $__env->startSection('cdn-css'); ?>
    ##parent-placeholder-5bb9ffd2ab39aef3394577313745ed8c84198c0f## 
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <br>
    <div class="dashboard container">
       <form action="#" method="POST">
            <?php echo csrf_field(); ?>
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
                                            <input type="text" class="form-control" id="inputCiente" placeholder="Cliente">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDireccion" class="col-sm-3 col-form-label">Dirección:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputDireccion" placeholder="Dirección">
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
                                            <input type="text" class="form-control" id="inputTon" placeholder="(TonlHc)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDireccion" class="col-sm-3 col-form-label">Cultivo:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputDireccion" placeholder="Cultivo">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-3 col-form-label">Email:</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Datos del excel para los flujos</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="card-title">Flujo financiado</h5>
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
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>$320,800</td>
                                                    <td>$320,800</td>
                                                    <td>51%</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>$320,800</td>
                                                    <td>$320,800</td>
                                                    <td>$320,800</td>
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
                                                    <td>n</td>
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
                                            </tfoot>
                                        </table>
                                    <br>
                                    <br>
                                    <a href="<?php echo e(url("dashboard")); ?>" class="btn btn-primary float-right">Generar Dashboard</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    ##parent-placeholder-93f8bb0eb2c659b85694486c41717eaf0fe23cd4##
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reinke\resources\views/input_data_dashboard.blade.php ENDPATH**/ ?>
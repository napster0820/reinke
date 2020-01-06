<?php $__env->startSection('title', 'Datos'); ?>

<?php $__env->startSection('cdn-css'); ?>
##parent-placeholder-5bb9ffd2ab39aef3394577313745ed8c84198c0f## 
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<br>
<div class="dashboard container-fluid">
    <form action="<?php echo e(route('datos.guardar')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo $__env->make('alerts.message_register_errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
            <div class="card">
                <h5 class="card-header">
                   Datos Cliente
                </h5>
               <div class="card-body">
                <?php if(isset($mensaje)): ?>
                <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo e($mensaje ?? ''); ?>

                    </div>
                <?php endif; ?>
                <input type="hidden" value="<?php echo e(csrf_token()); ?>" id="token">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputCliente" class="col-sm-3 col-form-label">Cliente:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputClient" placeholder="Cliente" name="client" value="<?php echo e(old('client')); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputTon" class="col-sm-6 col-form-label">Producción estimada o (TonlHc):</label>
                            <div class="col-sm-6">
                                <input type="number" step="any" class="form-control" id="inputProduction" placeholder="(TonlHc)" name="production" value="<?php echo e(old('production')); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputDireccion" class="col-sm-3 col-form-label">Dirección:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputAddress" placeholder="Dirección" name="address" value="<?php echo e(old('address')); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputCultivo" class="col-sm-3 col-form-label">Cultivo:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputCulture" placeholder="Cultivo" name="culture" value="<?php echo e(old('culture')); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputEstado" class="col-sm-3 col-form-label">Estado:</label>
                            <div class="col-sm-9">
                                <select id="inputState" class="form-control" name="country_state" value="<?php echo e(old('country_state')); ?>">
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
                                <input type="email" class="form-control" id="inputEmail" placeholder="Correo eletrónico" name="email" value="<?php echo e(old('email')); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="inputDiscountTax" class="col-sm-3 col-form-label">Tasa Descuento (%):</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputDiscountTax" placeholder="Tasa Descuento" name="discount_tax" value="<?php echo e(old('discount_tax')); ?>">
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


<br/>
<div class="card">
    <h5 class="card-header">Datos de los flujos <?php if($client ?? ''): ?> del cliente: <b><?php echo e($client->client); ?></b> <?php endif; ?></h5>
    <div class="card-body">
        <h5 class="card-title">Flujo de contado</h5>  
        <div class="row">
            <div class="col-md-6">
                <button type="button" name="create_cash_flow" id="create_cash_flow" class="btn btn-primary">Crear Nuevo Periodo</button>
            </div>    
        </div>    
        <div id="formModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Añadir nuevo periodo contado</h4>
                    </div>  
                    <div class="modal-body">
                        <span id="form-result"></span>
                        <form method="post" id="form_cash_flow" enctype="multipart/form-data" class="form-horizontal">
                        <?php echo csrf_field(); ?>            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <input type="text" class="hide" id="client_id" name="client_id" disabled value="<?php if($client ?? ''): ?><?php echo e($client->id); ?><?php endif; ?>">
                                        <label for="inputPeriod" class="col-sm-3 col-form-label">Período:</label>
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
                                    <div class="form-group">
                                        <label for="inputCashFlow" class="col-sm-3 col-form-label">Sistema de riego ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_irrigation_sys" name="vl_irrigation_sys" value="<?php echo e(old('vl_irrigation_sys')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputCashFlow" class="col-sm-3 col-form-label">Inversion cultivo ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_investment" name="vl_investment" value="<?php echo e(old('vl_investment')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputCashFlow" class="col-sm-3 col-form-label">Energía ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_energy" name="vl_energy" value="<?php echo e(old('vl_energy')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputCashFlow" class="col-sm-3 col-form-label">Mantenimiento ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_maintenance" name="vl_maintenance" value="<?php echo e(old('vl_maintenance')); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputCashFlow" class="col-sm-3 col-form-label">Ingreso ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_entry" name="vl_entry" value="<?php echo e(old('vl_entry')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputCashFlow" class="col-sm-3 col-form-label">Liquidación ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_liquidation" name="vl_liquidation" value="<?php echo e(old('vl_liquidation')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputCashFlow" class="col-sm-3 col-form-label">Flujo por período ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_period_flow" name="vl_period_flow" value="<?php echo e(old('vl_period_flow')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputCashFlow" class="col-sm-3 col-form-label">Acumulado ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_accumulated" name="vl_accumulated" value="<?php echo e(old('vl_accumulated')); ?>">
                                        </div>
                                    </div>
                                </div>
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
                </br>
        <!--<div id="confirmModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title">Confirmation</h2>
                    </div>
                    <div class="modal-body">
                        <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
                    </div>
                    <div class="modal-footer">
                    <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>-->
                </br>
                 <?php if(session('mensaje')): ?>
                 <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo e(session('mensaje')); ?>

                </div>
                <?php endif; ?>
                <?php if(session('mensaje_err')): ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo e(session('mensaje_err')); ?>

                </div>
                <?php endif; ?>

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
                                    <th>Acción</th> <!-- Corregir tamaño para los botones -->
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 

<br/>
<div class="card">
    <h5 class="card-header">Datos de los flujos <?php if($client ?? ''): ?> del cliente: <b><?php echo e($client->client); ?></b> <?php endif; ?></h5>
    <div class="card-body">
        <h5 class="card-title">Flujo financiado</h5>  
        <div class="row">
            <div class="col-md-6">
                <button type="button" name="create_finance_flow" id="create_finance_flow" class="btn btn-primary">Crear Nuevo Periodo</button>
            </div>    
        </div>    
        
        <div id="formModalF" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Añadir nuevo periodo financiado</h4>
                    </div>  
                    <div class="modal-body">
                        <span id="form-result"></span>
                        <form method="post" id="form_finance_flow" enctype="multipart/form-data" class="form-horizontal">
                        <?php echo csrf_field(); ?>            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                    <input type="text" class="readonly" id="client_id" name="client_id" disabled value="<?php if($client ?? ''): ?><?php echo e($client->id); ?><?php endif; ?>">
                                        <label for="inputPeriod" class="col-sm-3 col-form-label">Período:</label>
                                        <div class="col-sm-9">
                                            <select id="periodF" class="form-control" name="periodF">
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
                                    <div class="form-group">
                                        <label for="inputFinanceFlow" class="col-sm-3 col-form-label">Sistema de riego ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_irrigation_sysF" name="vl_irrigation_sysF" value="<?php echo e(old('vl_irrigation_sysF')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputFinanceFlow" class="col-sm-3 col-form-label">Saldo insoluto ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_balanceF" name="vl_balanceF" value="<?php echo e(old('vl_balanceF')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputFinanceFlow" class="col-sm-3 col-form-label">Interés sistema riego ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_crop_interestF" name="vl_crop_interestF" value="<?php echo e(old('vl_crop_interestF')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputFinanceFlow" class="col-sm-3 col-form-label">Inversion cultivo ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_investmentF" name="vl_investmentF" value="<?php echo e(old('vl_investmentF')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputFinanceFlow" class="col-sm-3 col-form-label">Energía ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_energyF" name="vl_energyF" value="<?php echo e(old('vl_energyF')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputFinanceFlow" class="col-sm-3 col-form-label">Mantenimiento ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_maintenanceF" name="vl_maintenanceF" value="<?php echo e(old('vl_maintenanceF')); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputFinanceFlow" class="col-sm-3 col-form-label">Ingreso ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_entryF" name="vl_entryF" value="<?php echo e(old('vl_entryF')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputFinanceFlow" class="col-sm-3 col-form-label">Liquidación ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_liquidationF" name="vl_liquidationF" value="<?php echo e(old('vl_liquidationF')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputFinanceFlow" class="col-sm-3 col-form-label">Flujo por período ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_period_flowF" name="vl_period_flowF" value="<?php echo e(old('vl_period_flowF')); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputFinanceFlow" class="col-sm-3 col-form-label">Acumulado ($):</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="vl_accumulatedF" name="vl_accumulatedF" value="<?php echo e(old('vl_accumulatedF')); ?>">
                                        </div>
                                    </div>
                                </div>
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
        <!--<div id="confirmModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title">Confirmation</h2>
                    </div>
                    <div class="modal-body">
                        <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
                    </div>
                    <div class="modal-footer">
                    <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>-->
                </br>
                 <?php if(session('mensaje')): ?>
                 <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo e(session('mensaje')); ?>

                </div>
                <?php endif; ?>
                <?php if(session('mensaje_err')): ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo e(session('mensaje_err')); ?>

                </div>
                <?php endif; ?>

                <div class="row">
                    <div class="col-md-12">
                        <table id="financeFlowTable" class="display" style="width:100%">
                            <thead>
                                <tr>
                                <!--'period', 'vl_irrigation_sys', 'vl_balance', 'vl_crop_interest', 'vl_investment', 'vl_energy', 
                                'vl_maintenance', 'vl_entry', 'vl_liquidation', 'vl_period_flow', 'vl_accumulated', 'client_id'];-->
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
                                    <th>Acción</th> <!-- Corregir tamaño para los botones -->
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>  
    <div>
</div>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
    //alert("teste");

//Cash Flow
    $('#create_cash_flow').click(function(){

        $('.modal-title').text("Añadir nuevo periodo");
        $('#action_button').val("Add");
        $('#action').val("Add");
        $('#formModal').modal();
        //$('#formModal').show('modal');
        alert("entró modal");
    /*$("#create_cash_flow").click(function(){
    $("#formModal").modal();*/
    });

    $('#form_cash_flow').on('submit', function(){
        event.preventDefault();
        //if($('#action').val() == 'Add')
        //{
            $.ajax({
                url: "<?php echo e(route('cashflows.store')); ?>",
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
                        for(var count = 0; count < data.errors.lenght; count++)
                        {
                            html += '<p>' + data.errors[count] + '</p>';
                        }
                        html += '</div>';
                    }
                    if (data.success) 
                    {
                        html = '<div class="alert alert-success">' + data.success + '</div>';
                        $('#form_cash_flow')[0].reset(); //limpar todo valor do formulario
                        $('#cashFlowTable').DataTable().ajax.reload(); //refresh la tabla
                    }
                    $('#form_result').html(html); //display las mensajes
                }
            });
        //}
    });

    //Finance Flow
    $('#create_finance_flow').click(function(){
//      alert("entró modal");
        $('.modal-title').text("Añadir nuevo periodo");
        $('#action_button').val("Add");
        $('#action').val("Add");
        $('#formModalF').modal();
        //$('#formModalF').show('modal');
        alert("entró modal F");
    });
    $('#form_finance_flow').on('submit', function(event){
        event.preventDefault();
        //if($('#action').val() == 'Add')
        //{
            $.ajax({
                url: "<?php echo e(route('financeflows.store')); ?>",
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
                        for(var count = 0; count < data.errors.lenght; count++)
                        {
                            html += '<p>' + data.errors[count] + '</p>';
                        }
                        html += '</div>';
                    }
                    if (data.success) 
                    {
                        html = '<div class="alert alert-success">' + data.success + '</div>';
                        $('#form_finance_flow')[0].reset(); //limpar todo valor do formulario
                        $('#financeFlowTable').DataTable().ajax.reload(); //refresh la tabla
                    }
                    $('#form_result').html(html); //display las mensajes
                }
            });
        //}
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
                url: "<?php echo e(route('cashflows.index', $client ?? '')); ?>"
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
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
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


        $('#financeFlowTable').DataTable(
        {   
            processing: true,
            serverSide: true,
            ajax: {
                url: "<?php echo e(route('financeflows.index', $client ?? '')); ?>"
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
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reinke\resources\views/input_data_dashboard.blade.php ENDPATH**/ ?>
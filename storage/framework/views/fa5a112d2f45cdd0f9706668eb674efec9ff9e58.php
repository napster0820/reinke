<?php $__env->startSection('title', 'Datos'); ?>

<?php $__env->startSection('cdn-css'); ?>
    ##parent-placeholder-5bb9ffd2ab39aef3394577313745ed8c84198c0f## 
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <br>
    <div class="dashboard container">
       <form action="<?php echo e(url('datos')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('alerts.message_register_errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                            <input type="text" class="form-control" id="inputCliente" placeholder="Cliente" name="name" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDireccion" class="col-sm-3 col-form-label">Dirección:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputDireccion" placeholder="Dirección" name="address" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEstado" class="col-sm-3 col-form-label">Estado:</label>
                                        <div class="col-sm-9">
                                            <select id="inputEstado" class="form-control" name="country_state" value="">
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
                                            <input type="number" step="any" class="form-control" id="inputTon" placeholder="(TonlHc)" name="production" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputCultivo" class="col-sm-3 col-form-label">Cultivo:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputCultivo" placeholder="Cultivo" name="culture" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-3 col-form-label">Email:</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="">
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
                        <h5 class="card-header">Datos de los flujos</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="card-title">Flujo contado</h5>
                                    <table id="example" class="display" style="width:20%!important">
                                            <thead>
                                                <tr>
                                                    <th>Periodo</th>
                                                    <th>Sistema de riego ($)</th>
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
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_energy" name="vl_energy" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_entry" name="vl_entry" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                <!---<tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="2" readonly></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_energy" name="vl_energy" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_entry" name="vl_entry" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                 <tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="3" readonly></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_energy" name="vl_energy" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_entry" name="vl_entry" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                 <tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="4" readonly></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_energy" name="vl_energy" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_entry" name="vl_entry" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                 <tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="5" readonly></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_energy" name="vl_energy" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_entry" name="vl_entry" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                 <tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="6" readonly></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_energy" name="vl_energy" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_entry" name="vl_entry" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                 <tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="7" readonly></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_energy" name="vl_energy" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_entry" name="vl_entry" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                 <tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="8" readonly></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_energy" name="vl_energy" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_entry" name="vl_entry" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                 <tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="9" readonly></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_energy" name="vl_energy" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_entry" name="vl_entry" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                 <tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="10" readonly></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_energy" name="vl_energy" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_entry" name="vl_entry" value="" ></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>--->
                                        </table>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="card-title">Flujo financiado</h5>
                                        <table id="example2" class="display" style="width:20%!important">
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
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_balance" name="vl_balance" value=""></td>
                                                     <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_crop_interest" name="vl_crop_interest" value=""></td>
                                                     <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_energy" name="vl_energys" value=""></td> 
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_entry" name="vl_entry" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="number" step="any" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                <!---<tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="2" readonly></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_balance" name="vl_balance" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_crop_interest" name="vl_crop_interest" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_energy" name="vl_energys" value=""></td> 
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_entry" name="vl_entry" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="3" readonly></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_balance" name="vl_balance" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_crop_interest" name="vl_crop_interest" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_energy" name="vl_energys" value=""></td> 
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_entry" name="vl_entry" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="4" readonly></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_balance" name="vl_balance" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_crop_interest" name="vl_crop_interest" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_energy" name="vl_energys" value=""></td> 
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_entry" name="vl_entry" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="5" readonly></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_balance" name="vl_balance" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_crop_interest" name="vl_crop_interest" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_energy" name="vl_energys" value=""></td> 
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_entry" name="vl_entry" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="6" readonly></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_balance" name="vl_balance" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_crop_interest" name="vl_crop_interest" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_energy" name="vl_energys" value=""></td> 
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_entry" name="vl_entry" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="7" readonly></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_balance" name="vl_balance" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_crop_interest" name="vl_crop_interest" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_energy" name="vl_energys" value=""></td> 
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_entry" name="vl_entry" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="8" readonly></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_balance" name="vl_balance" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_crop_interest" name="vl_crop_interest" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_energy" name="vl_energys" value=""></td> 
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_entry" name="vl_entry" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="9" readonly></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_balance" name="vl_balance" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_crop_interest" name="vl_crop_interest" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_energy" name="vl_energys" value=""></td> 
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_entry" name="vl_entry" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>
                                                <tr>
                                                    <td><input style="width:50%!important" type="text" id="row-period" name="period" value="10" readonly></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_irrigation_sys" name="vl_irrigation_sys" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_balance" name="vl_balance" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_crop_interest" name="vl_crop_interest" value=""></td>
                                                     <td><input style="width:100%!important" type="text" id="row-1-vl_investment" name="vl_investment" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_energy" name="vl_energys" value=""></td> 
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_maintenance" name="vl_maintenance" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_entry" name="vl_entry" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_liquidation" name="vl_liquidation" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_period_flow" name="vl_period_flow" value=""></td>
                                                    <td><input style="width:100%!important" type="text" id="row-1-vl_accumulated" name="vl_accumulated" value=""></td>
                                                </tr>--->
                                            </tfoot>
                                        </table>
                                    <br>
                                    <br>
                                    <button id="btn_generarDash" class="btn btn-primary float-right" type="submit">Generar Dashboard</button>
                                   <!-- <a href="<?php echo e(url("dashboard")); ?>" class="btn btn-primary float-right">Generar Dashboard</a>
                                </div>--->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scipts'); ?>
    ##parent-placeholder-daa97b9c5577f0c1889807cb7d908bbdc813da71##
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
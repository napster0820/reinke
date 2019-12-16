<?php $__env->startSection('title', 'Historial'); ?>

<?php $__env->startSection('cdn-css'); ?>
    ##parent-placeholder-5bb9ffd2ab39aef3394577313745ed8c84198c0f## 
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class = "history container">
			<?php echo csrf_field(); ?> <!--para proteger la página web, no permite que sean enviados formularios de otras-->
			<br>
			<div class="row">
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Historial de Dashboards generados</h5>
                        <!--p>El dashboard quedará disponbile durante 60 días después de su última visualización.</p-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">

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

									<table id="dashboardList" class="display" style="width:100%">
						                <thead>
						                    <tr>
						                        <th>#</th>
						                        <th>Cliente</th>
						                        <th>Fecha creación</th>
						                        <th>Fecha alteración</th>
						                        <th>Acciones</th>
						                    </tr>
						                </thead>
						                <tbody>
						                	<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							                    <tr>
							                        <th scope="row"> <?php echo e($client->id); ?> </th>
													<td><?php echo e($client->name); ?></td>
													<td><?php echo e($client->created_at); ?></td>
													<td><?php echo e($client->updated_at); ?></td>
													<td>
														<a href="<?php echo e(url('dashboard')); ?>" data-toggle="tooltip" title="Visualizar"><i class="fas fa-eye"></i></a> | 
														<a href="<?php echo e(route('datos.editar', $client->id)); ?>"><i class="fas fa-edit"></i></a> | 
														<form action="<?php echo e(route('datos.delete', $client->id)); ?>" method="POST" class="d-inline">
															<?php echo method_field('DELETE'); ?>
															<?php echo csrf_field(); ?> 
															<button type="submit" name="hist_delete" id="hist_delete"><i class="fas fa-user-times"></i></button>
														</form>
													</td>
							                    </tr>
						                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						                    </tbody>
						                <tfoot>
						                    <tr>
						                        <th>#</th>
						                        <th>Cliente</th>
						                        <th>Fecha creación</th>
						                        <th>Fecha alteración</th>
						                        <th>Acciones</th>
						                    </tr>
						                </tfoot>
						            </table>
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
    <!--script src="js/register_validate.js"></script-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
	    $(document).ready(function() {
	        $('#dashboardList').DataTable(
	        {
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
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reinke\resources\views/history.blade.php ENDPATH**/ ?>
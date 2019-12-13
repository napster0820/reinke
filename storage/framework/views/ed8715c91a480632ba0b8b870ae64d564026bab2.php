<?php $__env->startSection('title', 'Historial'); ?>

<?php $__env->startSection('cdn-css'); ?>
    ##parent-placeholder-5bb9ffd2ab39aef3394577313745ed8c84198c0f## 
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class = "history container">
		<form action="#" method="post">
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
									<table id="dashboardList" class="display" style="width:100%">
						                <thead>
						                    <tr>
						                        <th>#</th>
						                        <th>Cliente</th>
						                        <th>Fecha creación</th>
						                        <th>Fecha última generación</th>
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
														<a href="<?php echo e(url('dashboard')); ?>" ><i class="fas fa-eye"></i></a> | <a href="<?php echo e(route('datos.editar', $client->id)); ?>"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-user-times"></i></a>
													</td>
							                    </tr>
						                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						                    </tbody>
						                <tfoot>
						                    <tr>
						                        <th>#</th>
						                        <th>Cliente</th>
						                        <th>Fecha creación</th>
						                        <th>Fecha última generación</th>
						                        <th></th>
						                    </tr>
						                </tfoot>
						            </table>
						        </div>
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
    <!--script src="js/register_validate.js"></script-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
	    $(document).ready(function() {
	        //Asegurate que el id que le diste a la tabla sea igual al texto despues del simbolo #
	        $('#dashboardList').DataTable();
	    });
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reinke\resources\views/history.blade.php ENDPATH**/ ?>
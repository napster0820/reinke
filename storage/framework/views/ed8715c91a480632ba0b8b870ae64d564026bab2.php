<?php $__env->startSection('title', 'Historial'); ?>

<?php $__env->startSection('content'); ?>
	<div class = "historial container">
		<form action="#" method="post">
			<br/>
			<h1>Historial de Dashboards generados</h1>
			<p>El dashboard quedará disponbile durante 60 días después de su última visualización.</p>
			<div class="row">
				<div class="table-responsive">
			<table id="dashboardList" class="table table-bordered table-hover table-striped">
				<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Cliente</th>
					<th scope="col">Fecha Generación</th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				<tr><!--Cargar los dashboards ya generados-->
					<th scope="row">1</th>
					<td>Teste</td>
					<td>21/11/2019</td>
					<td>
						<a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-user-times"></i></a>
					</td>
				</tr>
				</tbody>
			</table>
			</div>
			</div>
		</form>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scipts'); ?>
    ##parent-placeholder-daa97b9c5577f0c1889807cb7d908bbdc813da71##
    <!--script src="js/register_validate.js"></script-->
    <script type="text/javascript">
	    $(document).ready(function() {
	        //Asegurate que el id que le diste a la tabla sea igual al texto despues del simbolo #
	        $('#dashboardList').DataTable();
	    } );
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reinke\resources\views/history.blade.php ENDPATH**/ ?>
@extends('layout.app')

@section('title', 'Historial')

@section('cdn-css')
    @parent 
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection

@section('content')
	<div class = "history container">
			@csrf <!--para proteger la página web, no permite que sean enviados formularios de otras-->
			<br>
			<div class="row">
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Historial de Dashboards generados</h5>
                        <!--p>El dashboard quedará disponbile durante 60 días después de su última visualización.</p-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">

                                	@if (session('mensaje'))
			                        	<div class="alert alert-success alert-dismissable">
			                        		<button type="button" class="close" data-dismiss="alert">&times;</button>
			                        		{{ session('mensaje') }}
			                        	</div>
			                        @endif
			                        @if (session('mensaje_err'))
			                        	<div class="alert alert-danger alert-dismissable">
			                        		<button type="button" class="close" data-dismiss="alert">&times;</button>
			                        		{{ session('mensaje_err') }}
			                        	</div>
			                        @endif

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
						                	@foreach($clients as $client)
							                    <tr>
							                        <th scope="row"> {{$client->id}} </th>
													<td>{{$client->client}}</td>
													<td>{{$client->created_at}}</td>
													<td>{{$client->updated_at}}</td>
													<td>
														<a href="{{ url('dashboard', $client->id) }}" data-toggle="tooltip" title="Visualizar" class="btn btn-primary btn-sm">Visualizar</a> 
														<!--a href="{{ route('datos.editar', $client->id) }}" class="btn btn-warning btn-sm">Editar</a--> 
														<form action="{{ route('datos.delete', $client->id) }}" method="POST" class="d-inline">
															@method('DELETE')
															@csrf 
															<button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
														</form>
													</td>
							                    </tr>
						                    @endforeach
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
@endsection

@section('js')
    @parent
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
@endsection
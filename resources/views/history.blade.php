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
                        @if (session('mensaje'))
                        	<div class="alert alert-success">
                        		{{ session(mensaje) }}
                        	</div>
                        @endif
                        @if (session('mensaje_err'))
                        	<div class="alert alert-error">
                        		{{ session(mensaje_err) }}
                        	</div>
                        @endif

                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
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
													<td>{{$client->name}}</td>
													<td>{{$client->created_at}}</td>
													<td>{{$client->updated_at}}</td>
													<td>
														<a href="{{ url('dashboard') }}" ><i class="fas fa-eye"></i></a> | 
														<a href="{{ route('datos.editar', $client->id) }}"><i class="fas fa-edit"></i></a> | 
														<form action="{{ route('datos.delete', $client->id) }}" method="POST" class="d-inline">
															@method('DELETE')
															@csrf 
															<button type="submit"><i class="fas fa-user-times"></i></button>
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
	        //Asegurate que el id que le diste a la tabla sea igual al texto despues del simbolo #
	        $('#dashboardList').DataTable();
	    });
	</script>
@endsection
@extends('layout.app')

@section('title', 'Política')

@section('content')
<div class="ayuda container">
		<br/>
		<h3>Preguntas frecuentes</h3>
		<br/>
		<div>
			@csrf
			<ol type=”A”>
			  <li>
			  	<b>¿Dónde se realiza en login en el sistema?</b>
			  	<br/>
			  	Para acceder a la página de login, hay que clicar en el logo de Reinke a la izquierda de la página. Solo será posible para usuarios registrados.
			  </li>		
			  <li>
			  	<b>¿Dónde se realiza en login en el sistema?</b>
			  	<br/>
			  	Para acceder a la página de login, hay que clicar en el logo de Reinke a la izquierda de la página. Solo será posible para usuarios registrados.
			  </li>		  
			</ol>
		</div>
	</div>

@endsection
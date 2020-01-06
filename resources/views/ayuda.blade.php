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
			  	<p>
				  	<b>¿Dónde se realiza en login en el sistema?</b>
				  	<br/>
				  	Para acceder a la página de login, hay que clicar en el logo de Reinke a la izquierda de la página. Solo será posible para usuarios registrados.
			  	</p>
			  </li>		
			  <li>
			  	<p>
				  	<b>¿Dónde se realiza en registro en el sistema?</b>
				  	<br/>
				  	Por el link 'Registrarse', presente en el menu.
				</p> 
			  </li>
			  <li>
			  	<p>
				  	<b>¿Para que se utiliza el sistema?</b>
				  	<br/>
				  	Para generar un panel administrativo con la inversión financiera, a partir de los datos calculados en el Excel de Reinke. El resultado de la inversión podrá ser visualizado por una línea de tiempo, por un gráfico de barras y línea. También hay un tercer gráfico en lo cual se puede visualizar los costos totales. 
				</p>
			  </li>	
			  <li>
			  	<p>
				  	<b>¿Dónde de visualiza el Dashboard?</b>
				  	<br/>
				  	Será posible visualizarlo después que se realiza el login o registro de usuario y se cargan los datos del clientes en el formulário accedido por el link <a href="{{ url("datos") }}") }}>Nuevo Dashboard</a>. 
				  	<br/>
				  	También puedes visualizar los que ya fueron generados por en link <a href="{{ url("historial") }}") }}>Consultar Dashboards</a>.
				</p>
			  </li>
			  <li>
			  	<p>
				  	<b>¿Puedo generar nuevamente un Dashboard que ya cadastré?</b>
				  	<br/>
				  	Es posible generarlo por el link <a href="{{ url("historial") }}") }}>Consultar Dashboards</a>. 
				</p>
			  </li>		
			  <li>
			  	<p>
				  	<b>¿Mis datos se encuentran protegidos en el sistema?</b>
				  	<br/>
				  	Contamos con un framework que apoya a la seguridad, además de que fue realizado un análisis detallado de técnicas y tecnologías utilizadas en el sisetma para garantizar esta calidad en el servicio ofrecido. También puede consultar nuestra política de privacidad <a href="{{ url("politica") }}") }}>aqui</a>.
				</p>
			  </li>	
			  <li>
			  	<p>
				  	<b>¿Cómo realizo cambios en un Dashboard?</b>
				  	<br/>
				  	Busque el registro por en el <a href="{{ url("historial") }}") }}>Consultar Dashboards</a> y seleccione el botón de edición.
				</p>
			  </li>				  
			</ol>
		</div>
	</div>

@endsection
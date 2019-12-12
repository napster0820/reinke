@extends('layout.app')

@section('title', 'Política')

@section('content')
	<div class="politica container">
		<br/>
		<h3>Política de privacidad y uso</h3>
		<div>
			@csrf
			<ul type=”A”>
			  <li>Cuando se encuentre haciendo uso del sitio web y le sean solicitados datos personales, Usted compartirá esta información sólo con los estudiantes de la Maestría en Sistemas Interactivos Centrados en el Usuario (MSICU), ya que no se compartirá la información confidencial con terceras personas, salvo que sea requerida por orden judicial o que Usted de manera expresa lo autorice de conformidad con la Ley vigente.</li>
			  <li>El uso del sistema es restrito a los estudiantes de la Maestría en Sistemas Interactivos Centrados en el Usuario y a los usuarios de la empresa Reinke.</li>
			  <li>Este es un sistema construido para fines educativos.</li>
			  <li>MSICU puede difundir las estadísticas de acceso a el sitio web, con propósitos lícitos en los casos que marque la ley.</li>
			  <li>Los estudiantes de MSICU se reservan el derecho de realizar actualizaciones a esta política de privacidad por lo que le recomendamos revisar este documento periódicamente para estar enterado de estos cambios.</li>
			  <li>Esta política es efectiva a partir del 16 de diciembre de 2019.</li>
			</ul>
		</div>
	</div>
@endsection 
@extends('layout.layout_page')

@section('styles')
<style>
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        ul {
            padding-left: 20px; /* Asegura espacio a la izquierda */
            list-style-type: disc !important; /* Fuerza las viñetas */
        }
        li {
            margin-bottom: 5px;
        }
    </style>
@endsection

@section('content')

	<!-- ===================================================
		Loading Transition
	==================================================== -->
	<div id="loader-wrapper">
		<div id="loader"></div>
	</div>

	<!-- 
	=============================================
		Theme Inner Banner
	============================================== 
	-->
	<div class="theme-inner-banner section-spacing">
		<div class="overlay">
			<div class="container">
				<h2>Sistema Sat- Peñalver</h2>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->

	<div class="container mt-4">
        <div class="card p-4">
		<h4 class="fw-bold mt-3">Requisitos para la inscripción en el Sistema Sat- Peñalver</h4><br/>
            <ul>
                <li>Registro Mercantil.</li>
                <li>RIF de la Empresa o Firma Personal.</li>
                <li>Cedula de identidad del representante legal.</li>
                <li>Correo electrónico Activo.</li>
                <li>Teléfono Móvil o fijo.</li>
            </ul><br/>

            <h4 class="fw-bold mt-3">Requisitos para solicitar la licencia de Actividad Económica</h4><br/>
            <ul>
                <li>Conformidad sanitaria.</li>
                <li>Constancia de zona y conformidad de uso.</li>
                <li>Certificado de bomberos.</li>
                <li>Documento de propiedad. Ficha catastral actualizada.</li>
                <li>Fotos del local.</li>
                <li>Solvencia de Aseo Urbano.</li>
            </ul><br/>

            <h4 class="fw-bold mt-3">Requisitos para solicitar la licencia de licores</h4><br/>
            <ul>
                <li>Conformidad sanitaria.</li>
                <li>Constancia de zona y conformidad de uso.</li>
                <li>Certificado de bomberos.</li>
                <li>Documento de propiedad. Ficha catastral actualizada.</li>
                <li>Fotos del local.</li>
                <li>Solvencia de Aseo Urbano.</li>
            </ul><br/>

            <h4 class="fw-bold mt-3">Nuestro Portal Web te permite realizar de manera más rápida y segura tus trámites sobre: </h4><br/>
            <ul>
                <li>Impuesto por Publicidad y Propaganda.</li>
                <li>Impuesto de Propiedad Inmobiliaria.</li>
                <li>Impuesto sobre Vehículos.</li>
                <li>Solvencias Municipales.</li>
                <li>Tasas Administrativas.</li>
            </ul><br/>

			<p class="mt-3 text-end">A solo un click de estar al Día con tus impuestos.</p>
            <p class="mt-3 text-end"><strong>¡Sí contribuyes, Construyes!</strong></p>
			<p class="mt-3 text-end"><a href="https://penalver.sigeat.com/login" target="_blank">https://penalver.sigeat.com/login</a></p>
			<br/><br/>
        </div>
    </div>

@endsection
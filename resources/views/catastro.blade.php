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
				<h2>Catastro Municipal</h2>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->

	<div class="container mt-4">
        <div class="card p-4">
		<h3 class="fw-bold mt-3">Propiedad Inmobiliaria</h3>
		<h4 class="fw-bold mt-3">Requisitos para la Ficha Catastral</h4><br/>
            <ul>
                <li>Copia de documento.</li>
                <li>Copia de cédula.</li>
                <li>Copia del Rif .</li>
            </ul><br/>

            <h4 class="fw-bold mt-3">Declaración jurada de Inmueble</h4>
            <h4 class="fw-bold mt-3">Informe técnico</h4>
            <h4 class="fw-bold mt-3">Inspección de terrenos municipales </h4><br/>

			<h4 class="fw-bold mt-3">Director:</h4>
            <p class="mt-3 text-end">Luis González</p>
            <p class="mt-3 text-end"><strong>Email:</strong> direccióndecatastro6@gmail.com</p>
            <p class="mt-3 text-end"><strong>Telefono:</strong> 0412-8129402</p>
			<br/><br/>
        </div>
    </div>

@endsection
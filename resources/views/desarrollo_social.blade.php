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
				<h2>Desarrollo Social</h2>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->

	<div class="container mt-4">
        <div class="card p-4">
		<h4 class="fw-bold mt-3">Servicios</h4><br/>
            <ul>
                <li>Atención a los adultos mayores, niños y personas con discapacidad.</li>
                <li>Entrega de medicamentos mensuales, como hipertensivos a los adultos mayores.</li>
                <li>Entrega de pañales a personas con discapacidad.</li>
                <li>Programa de alimentación, entrega de bolsas de comida a personas con discapacidad.</li>
                <li>Servicio de laboratorio.</li>
                <li>Apoyo en conjunto con la clínica municipal con las diferentes especialidades médicas.</li>
                <li>Carnet 3era edad.</li>
            </ul><br/>

            <h4 class="fw-bold mt-3">Requisitos:</h4><br/>
            <ul>
                <li>Fotocopia de la cédula de identidad.</li>
                <li>Fotocopia de informe médico.</li>
                <li>Carta explicativa.</li>
                <li>Apoyo en laboratorio.</li>
            </ul><br/>

			<h4 class="fw-bold mt-3">Directora:</h4>
            <p class="mt-3 text-end">Delvalle Josefina Martínez Cupamo</p>
            <p class="mt-3 text-end"><strong>Telefono:</strong> 0414-8468091</p>
			<br/><br/>
        </div>
    </div>

@endsection
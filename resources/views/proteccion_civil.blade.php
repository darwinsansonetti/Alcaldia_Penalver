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
				<h2>Organización de Protección Civil y Administración de Desastres del Municipio Peñalver </h2>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->

	<div class="container mt-4">
        <div class="card p-4">
		    <h4 class="fw-bold mt-3">Departamento de Operaciones</h4>
            <p class="mt-3 text-end">Responder a las emergencias y desastres por parte del personal operativo, apoyando a los organismos de atención primaria, tales como: policía y bomberos. Protección Civil como ente de segunda respuesta ante emergencias y desastres. </p><br/>

            <h4 class="fw-bold mt-3">Responsable</h4>
            <p class="mt-3 text-end">OSPC/I.TSU.Berenice Piñango</p>
            <p class="mt-3 text-end"><strong>Telefono:</strong> 0424-8689742</p><br/>
            
            <h4 class="fw-bold mt-3">Departamento de Gestión del Riego</h4>
            <p class="mt-3 text-end">Tener una visión y gran polo importante para el área de la gestión del riesgo. E identificar la amenaza, vulnerabilidad o riesgo. Y reducir la máxima expresión. </p><br/>            
            <ul>
                <li>Copia de la Cédula de Identidad.</li>
                <li>Solicitud Mediante Escrito del Propietario.</li>
            </ul><br/>

            <h4 class="fw-bold mt-3">Responsable</h4>
            <p class="mt-3 text-end">Inspector de riesgo. OPC. TSU. Jeferson Pinto.</p>
            <p class="mt-3 text-end"><strong>Telefono:</strong> 04248723857</p><br/>

            <h4 class="fw-bold mt-3">Departamento de Educación y Prevención</h4>
            <p class="mt-3 text-end">Diseña programas de capacitación, entrenamiento y formación, dirigidos a promover y fianzar la participación y deberes ciudadanos en los casos de emergencia y desastres, proyectados hacia las comunidades, instituciones publicas y privadas. </p><br/>

            <h4 class="fw-bold mt-3">Responsable</h4>
            <p class="mt-3 text-end">OSPC/1. TSU. Deivys Tapisquen</p>
            <p class="mt-3 text-end"><strong>Telefono:</strong> 0412-8365024</p><br/>


			<h4 class="fw-bold mt-3">Director de PC Peñalver</h4>
            <p class="mt-3 text-end">OSPC/1.TSU.Henri Ivimas.</p>
            <p class="mt-3 text-end"><strong>Telefono:</strong> 0424-8416324</p>
			<br/><br/>
        </div>
    </div>

@endsection
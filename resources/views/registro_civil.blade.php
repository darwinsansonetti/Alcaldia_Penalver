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
				<h2>Registro Civil</h2>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->

	<div class="container mt-4">
        <div class="card p-4">
		    <h4 class="fw-bold mt-3">Nacimiento</h4><br/>
            <ul>
                <li>Certificado EV-25.</li>
                <li>Cedulas identidad Padres y dos testigos.</li>
                <li>Inscripciones de Nacimiento conforme a la Ley, según el caso.</li>
            </ul><br/>

            <h4 class="fw-bold mt-3">Matrimonio</h4><br/>
            <ul>
                <li>Cedulas identidad Contrayentes y dos testigos.</li>
                <li>Actas de Nacimientos.</li>
                <li>Estado civil, según sea el caso Sentencia de Divorcio.</li>
                <li>Nombramiento del Curador Ad-Hoc.</li>
                <li>Capitulaciones Matrimoniales.</li>
            </ul><br/>

            <h4 class="fw-bold mt-3">Uniones Estables de Hecho</h4><br/>
            <ul>
                <li>Constitución y disolución.</li>
                <li>Cedulas de identidad Pareja y dos testigos.</li>
                <li>Estado civil.</li>
                <li>Actas de Nacimientos.</li>
            </ul><br/>

            <h4 class="fw-bold mt-3">Defunción</h4><br/>
            <ul>
                <li>Presunción y declaración de ausencia.</li>
                <li>Presunción de muerte.</li>
                <li>Certificado EV-14.</li>
                <li>Cedulas de identidad del Declarante, dos Testigos y Difunto.</li>
            </ul><br/>

            <p class="mt-3 text-end">La filiación. La Adopción. La Interdicción e Inhabilitación. Los actos relativos a la nacionalidad Venezolana.</p>
            <p class="mt-3 text-end">El estado civil de las personas de los pueblos y comunidades Indígenas.
            La residencia. Rectificaciones e Inserciones de actas del estado civil. Atención Preferencial a Personas con Discapacidad.</p><br/>


			<h4 class="fw-bold mt-3">Registradora Civil:</h4>
            <p class="mt-3 text-end">ABG. Delia Salazar</p>
            <p class="mt-3 text-end"><strong>Email:</strong> deliasalazara59@gmail.com</p>
            <p class="mt-3 text-end"><strong>Telefono:</strong> 0414-8207224</p>
            <p class="mt-3 text-end"><strong>Dirección:</strong> Casco central, Calle Peñalver, Puerto Píritu</p>
			<br/><br/>
        </div>
    </div>

@endsection
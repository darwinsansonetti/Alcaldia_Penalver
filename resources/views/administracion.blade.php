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
				<h2>Administración</h2>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->

	<div class="container mt-4">
        <div class="card p-4">
            <h4 class="fw-bold mt-3">REQUISITOS EXIGIDOS</h4><br/>
            <p class="mt-3 text-end">Requisitos de los aspirantes que deseen ofertas sus servicios y/o productos para ser cotizados 
                por la Alcaldia del Municipio Fernando Peñalver:
            </p>
            <ul>
                <li>Presupuesto</li>
                <li>Factura autorizada por el Seniat.</li>
                <li>Registro Mercantil.</li>
                <li>Rif Juridico.</li>
                <li>Rif Personal.</li>

                <li>Registro Nacional de Contratista</li>
                <li>Cuenta Bancaria Juridica</li>
                <li>Sello de la Empresa (Sello humedo).</li>
                <li>Nombre completo de la Empresa.</li>
                <li>Telefono.</li>
                <li>Correo Electronico.</li>
            </ul><br/>
        
            <h4 class="fw-bold mt-3">Administradora:</h4>
            <p class="mt-3 text-end">Lic. Yennis Ochoa</p>
            <p class="mt-3 text-end"><strong>Email:</strong> finanzaspenalver2023@gmail.com</p>
            <p class="mt-3 text-end"><strong>Telefono:</strong> 0424-8663591</p>
			<br/><br/>
        </div>
    </div>

@endsection
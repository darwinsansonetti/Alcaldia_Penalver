@extends('layout.layout_page')

@section('content')

	<!-- ===================================================
		Loading Transition
	==================================================== -->
	<div id="loader-wrapper">
		<div id="loader"></div>
	</div>

	<!--
	=====================================================
		Faq Section
	=====================================================
	-->
	<div class="faq-section">
		<div class="overlay">
			<div class="container">
				<div class="theme-title-one">
					<h2>Misión - Visión</h2>
				</div> <!-- /.theme-title-one -->

				<div class="wrapper row no-gutters">
					<div class="col-xl-6 col-lg-7 order-last">
						<div class="faq-content">
							<div class="accordion-one">
								<div class="panel-group theme-accordion" id="accordion">
									<div class="panel">
									<div class="panel-heading">
										<h6 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
										Nuestra Misión</a>
										</h6>
									</div>
									<div id="collapse1" class="panel-collapse collapse show">
										<div class="panel-body">
										<p>La Alcaldía del Municipio Francisco Peñalver del Estado Anzoátegui, es una institución que vela por el bienestar
											social, a través de una gestión orientada al cumplimiento de la Constitución de la República Bolivariana de Venezuela
											y demás leyes, la organización de los poderes públicos municipales y la administración de los recursos y servicios 
											de la comunidad, permitiendo elevar la calidad de vida y garantizar el desarrollo integral del municipio.
										</p>
										</div>
									</div>
									</div> <!-- /panel 1 -->
									<div class="panel">
									<div class="panel-heading active-panel">
										<h6 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
										Nuestra Visión</a>
										</h6>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
										<div class="panel-body">
										<p>El Municipio Francisco Peñalver del Estado Anzoátegui es y será reconocido como uno de los 21 municipios
											quienes integran la geografía del estado y una potencia en materia turística, agrícola y pesquera; así como, por 
											el desempeñó efectivo de sus recursos y potencialidades, en procura de una mejor calidad de vida para sus 
											comunidades a traves de la articulación y la participación eficaz de los organismos municipales, estadales y 
											nacionales y la participación del poder popular organizado.
										</p>
										</div>
									</div>
									</div> <!-- /panel 2 -->
									
								</div> <!-- end #accordion -->
							</div> <!-- End of .accordion-one -->
						</div> <!-- /.faq-content -->
					</div> <!-- /.col- -->
					<div class="col-xl-6 col-lg-5 order-first"><div class="img-box"><i class="fa fa-play" aria-hidden="true"></i></div></div>
				</div> <!-- /.wrapper -->
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.faq-section -->

@endsection
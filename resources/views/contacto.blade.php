@extends('layout.layout_page')

@section('content')

	<!-- ===================================================
		Loading Transition
	==================================================== -->
	<div id="loader-wrapper">
		<div id="loader"></div>
	</div>
	
	<!-- 
	=============================================
		Conatct us Section
	============================================== 
	-->
	<div class="contact-us-section section-spacing">
		<div class="container">
			<div class="theme-title-one">
				<h2>Contactanos</h2>
			</div> <!-- /.theme-title-one -->
			<div class="clearfix main-content no-gutters row">
				<div class="col-lg-5 col-12"><div class="img-box"></div></div>
				<div class="col-lg-7 col-12">
					<div class="form-wrapper">
						<form action="#" class="theme-form-one form-validation" autocomplete="off">
							<h6 class="title">INFORMACION</h6>
							<div class="row">
								<div class="col-12"><p>Dirección: Avenida Fernando de Peñalver, casa 2, Puerto Píritu 6022, Anzoátegui, Venezuela.</p></div>
								<div class="col-12"><p>Correo Electrónico: despachoalcaldia.2021ptoptu@gmail.com</p></div>
								<div class="col-12"><p>Teléfono: (+58) 0281-4412325</p></div>
							</div> <!-- /.row -->
						</form>
					</div> <!-- /.form-wrapper -->
				</div> <!-- /.col- -->
			</div> <!-- /.main-content -->
		</div> <!-- /.container -->

		<!--Contact Form Validation Markup -->
		<!-- Contact alert -->
		<div class="alert-wrapper" id="alert-success">
			<div id="success">
				<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
				<div class="wrapper">
					<p>Your message was sent successfully.</p>
					</div>
			</div>
		</div> <!-- End of .alert_wrapper -->
		<div class="alert-wrapper" id="alert-error">
			<div id="error">
				<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
				<div class="wrapper">
					<p>Sorry!Something Went Wrong.</p>
				</div>
			</div>
		</div> <!-- End of .alert_wrapper -->
	</div> <!-- /.contact-us-section -->

@endsection
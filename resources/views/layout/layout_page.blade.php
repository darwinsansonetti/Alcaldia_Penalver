<!DOCTYPE html>
<html lang="es">
	
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#061948">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#061948">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
		<title>Alcaldia del Municipio Fernando Peñalver</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('images/fav-icon/logo_alcaldia.png') }}">
		
		<!-- Main style sheet -->
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">	
		<!-- responsive style sheet -->
		<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

		@yield('styles')	
	</head>

	<body>
		<div class="main-page-wrapper">		

			<!-- 
			=============================================
				Theme Header Two
			============================================== 
			-->
			<header class="header-two">
				<div class="top-header">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-8 col-12">
								<ul class="left-widget">
									<li>Siguenos en nuestras Redes Sociales!</li>
								</ul>
							</div>
							<div class="col-md-6 col-sm-4 col-12">
								<ul class="social-icon">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="https://www.instagram.com/alcaldia_penalver?igsh=dWpyaWg0eWMxODFi"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="bg-wrapper clearfix">
							<div class="logo float-left"><a href="{{ route('home') }}"><img src="{{ asset('images/logo/logo_alcaldia.png') }}" alt=""></a></div>
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-left">
					   			<nav id="mega-menu-holder" class="clearfix">
								   <ul class="clearfix">									    
								   		<li><a href="{{ route('home') }}">Inicio</a></li>
									    <li><a href="#">Nosotros</a>
									    	<ul class="dropdown">
									        	<li><a href="{{ route('alcalde.view') }}">Nuestro Alcalde</a></li>
									        	<li><a href="{{ route('organigrama.view') }}">Organigrama</a></li>
									        	<li><a href="{{ route('mision.view') }}">Mision / Vision</a></li>
									        	<li><a href="{{ route('galeria.view') }}">Galería</a></li>
									        	<li><a href="{{ route('login.view') }}">Acceso</a></li>
									       </ul>
									    </li>
									    <li><a href="#">Trámites</a>
									    	<ul class="dropdown">
									        	<li><a href="{{ url('Servicio-Desarrollo-Social') }}">Desarrollo social</a></li>
									        	<li><a href="{{ url('Catastro-Municipal') }}">Catastro Municipal</a></li>
									        	<li><a href="{{ url('Registro-Civil') }}">Registro Civil</a></li>
									        	<li><a href="{{ url('Proteccion-Civil') }}">Proteccion Civil</a></li>
									        	<li><a href="{{ url('Sistema-Sat') }}">Sistema SAT</a></li>
									        	<li><a href="{{ url('Ingenieria-Municipal') }}">Ingenieria Municipal</a></li>
									       </ul>
									    </li>
									    <li><a href="{{ route('contacto.view') }}">Contactanos</a></li>
									    <li><a href="{{ route('postulaciones.view') }}">Contrataciones</a></li>
								   </ul>
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->
						</div> <!-- /.bg-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.header-two -->

			<!-- ===========Contenido dinamico========== -->
			@yield('content')
			<!-- ===========Contenido dinamico========== -->

			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="theme-footer-two">
				<div class="top-footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-sm-6 col-12 logo-widget">
								<div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logo/logo_alcaldia_fondo_blanco.png') }}" alt=""></a></div>
								<p>Alcaldia del municipio Fernando Peñalver, Edo. Anzoategui, Venezuela.</p>
								<ul class="social-icon">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href=https://www.instagram.com/alcaldia_penalver?igsh=dWpyaWg0eWMxODFi#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.logo-widget -->
							<div class="col-lg-2 col-sm-6 col-12 footer-list">
								<h6 class="title">EXPLORAR</h6>
								<ul>
									<li><a href="{{ route('alcalde.view') }}">Nuestro Alcalde</a></li>
									<li><a href="{{ route('contacto.view') }}">Contactanos</a></li>
									<li><a href="{{ route('postulaciones.view') }}">Postulate</a></li>
									<li><a href="https://penalver.sigeat.com/login"  target="_blank">Oficina Virtual</a></li>
								</ul>
							</div> <!-- /.footer-list -->
							<div class="col-lg-3 col-sm-6 col-12 footer-gallery">
								<h6 class="title">Galeria</h6>
								<div class="wrapper">
									<div class="row">
										<div class="col-4">
											<a href="{{ asset('images/portfolio/7.jpg') }}" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="{{ asset('images/portfolio/7.jpg') }}" alt=""></a>
										</div>
										<div class="col-4">
											<a href="{{ asset('images/portfolio/8.jpg') }}" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="{{ asset('images/portfolio/8.jpg') }}" alt=""></a>
										</div>
										<div class="col-4">
											<a href="{{ asset('images/portfolio/9.jpg') }}" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="{{ asset('images/portfolio/9.jpg') }}" alt=""></a>
										</div>
										<div class="col-4">
											<a href="{{ asset('images/portfolio/10.jpg') }}" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="{{ asset('images/portfolio/10.jpg') }}" alt=""></a>
										</div>
										<div class="col-4">
											<a href="{{ asset('images/portfolio/11.jpg') }}" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="{{ asset('images/portfolio/11.jpg') }}" alt=""></a>
										</div>
										<div class="col-4">
											<a href="{{ asset('images/portfolio/12.jpg') }}" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="{{ asset('images/portfolio/12.jpg') }}" alt=""></a>
										</div>
									</div>
								</div>
							</div> <!-- /.footer-gallery -->
							
							<div class="col-lg-3 col-sm-6 col-12 contact-widget">
								<h6 class="title">INFORMACION</h6>
								<ul>
									<li>
										<i class="flaticon-direction-signs"></i>
										Avenida Fernando de Peñalver, casa 2, Puerto Píritu 6022, Anzoátegui, Venezuela.
									</li>
									<li>
										<i class="flaticon-multimedia-1"></i>
										despachoalcaldia.2021ptoptu@gmail.com
									</li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										(+58) 0281-4412325
									</li>
								</ul>
							</div> <!-- /.contact-widget -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-footer -->
				<div class="bottom-footer">
					<div class="container">
						<p>&copy; Copyrights 2025. Alcaldia del Municipio Peñalver. All Rights Reserved.</p>
					</div>
				</div> <!-- /.bottom-footer -->
			</footer> <!-- /.theme-footer-two -->


	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>

		</div> <!-- /.main-page-wrapper -->
		

		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="{{ asset('vendor/jquery.2.2.3.min.js') }}"></script>
		<!-- Popper js -->
		<script src="{{ asset('vendor/popper.js/popper.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<!-- Camera Slider -->
		<script src="{{ asset('vendor/Camera-master/scripts/jquery.mobile.customized.min.js') }}"></script>
		<script src="{{ asset('vendor/Camera-master/scripts/jquery.easing.1.3.js') }}"></script>
		<script src="{{ asset('vendor/Camera-master/scripts/camera.min.js') }}"></script>
	    <!-- menu  -->
		<script src="{{ asset('vendor/menu/src/js/jquery.slimmenu.js') }}"></script>
		<!-- WOW js -->
		<script src="{{ asset('vendor/WOW-master/dist/wow.min.js') }}"></script>
		<!-- owl.carousel -->
		<script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
		<!-- js count to -->
		<script src="{{ asset('vendor/jquery.appear.js') }}"></script>
		<script src="{{ asset('vendor/jquery.countTo.js') }}"></script>
		<!-- Fancybox -->
		<script src="{{ asset('vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
		<!-- Language Stitcher -->
		<script src="{{ asset('vendor/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
		

		<!-- Theme js -->
		<script src="{{ asset('js/theme.js') }}"></script>
	</body>
</html>
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
									<li>Modulo administrador</li>
								</ul>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="bg-wrapper clearfix">
							<div class="logo float-left"><a href="{{ route('dashboard.show') }}"><img src="{{ asset('images/logo/logo_alcaldia.png') }}" alt=""></a></div>
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-left">
					   			<nav id="mega-menu-holder" class="clearfix">
								   <ul class="clearfix">									    
								   		<li><a href="{{ route('dashboard.show') }}">Galeria</a></li>								    
								   		<li><a href="{{ route('noticias.show') }}">Noticias</a></li>
										<li><a href="{{ route('eventos.view') }}">Eventos</a></li>
									    <li><a href="{{ route('contrataciones.view') }}">Contrataciones</a></li>
									    <li><a href="{{ route('login.logout') }}">Cerrar Sesion</a></li>
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
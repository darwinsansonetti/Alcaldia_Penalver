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
		Theme Inner Banner
	============================================== 
	-->
	<div class="theme-inner-banner section-spacing">
		<div class="overlay">
			<div class="container">
				<h2>Organigrama Institucional</h2>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->


	<!-- 
	=============================================
		Our Blog
	============================================== 
	-->
	<div class="blog-inner-page section-spacing">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-12 our-blog">
					<div class="post-wrapper">
						<div class="single-blog">
							<div class="image-box">
								<img src="{{ asset('images/blog/organigrama.jpg') }}" alt="">
							</div> <!-- /.image-box -->
							<div class="post-meta">
								<h5 class="title">Organigrama - Alcaldia del municipio Francisco Peñalver</h5>
								<p>Asi esta conformada y estructurada nuestra alcaldia en el municipio Francisco Peñalver.</p>
							</div> <!-- /.post-meta -->
						</div> <!-- /.single-blog -->
					</div> <!-- /.post-wrapper -->
				</div>
				<!-- ===================== Blog Sidebar ==================== -->
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
					<div class="sidebar-container sidebar-categories">
						<h5 class="title">Estructura</h5>
						<ul>
							<li><a href="#">Alcalde</a></li>
							<li><a href="#">Despacho del Alcalde</a></li>
							<li><a href="#">Superintendencia Adm. Tri.</a></li>
							<li><a href="#">Administración y Fin.</a></li>
							<li><a href="#">Planificación y Pres.</a></li>
							<li><a href="#">Recursos Humanos</a></li>
							<li><a href="#">Registro Civil</a></li>
							<li><a href="#">Relaciones Públicas</a></li>
							<li><a href="#">Seguridad Ciudadana</a></li>
							<li><a href="#">Protección Civil</a></li>
						</ul>
					</div> <!-- /.sidebar-categories -->
				</div> <!-- /.col- -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.blog-inner-page -->

@endsection
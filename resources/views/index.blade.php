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
		Theme Main Banner
	============================================== 
	-->
	<div id="theme-main-banner" class="banner-one">
		<div data-src="{{ asset('images/home/slider-11new.jpg') }}">
			<div class="camera_caption">
				<div class="container">
				<p class="wow fadeInUp animated">Ejemplo de lucha, constancia y dedicación...</p>
				<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">Alcalde <br> Carlos Marcano</h1>
					<a href="{{ route('alcalde.view') }}" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">Detalles</a>
				</div> <!-- /.container -->
			</div> <!-- /.camera_caption -->
		</div>
		<div data-src="{{ asset('images/home/slider-12new.jpg') }}">
			<div class="camera_caption">
				<div class="container">
					<p class="wow fadeInUp animated">Siempre con su pueblo</p>
					<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">Alcaldia del Municipio <br> Francisco Peñalver</h1>
					<a href="{{ route('mision.view') }}" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">Detalles</a>
				</div> <!-- /.container -->
			</div> <!-- /.camera_caption -->
		</div>
		<div data-src="{{ asset('images/home/slider-13new.jpg') }}">
			<div class="camera_caption">
				<div class="container">
					<p class="wow fadeInUp animated">El mejor destino turistico de Venezuela</p>
					<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">Municipio <br> Francisco Peñalver</h1>
					<a href="{{ route('galeria.view') }}" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">Detalles</a>
				</div> <!-- /.container -->
			</div> <!-- /.camera_caption -->
		</div>
	</div> <!-- /#theme-main-banner -->
	
	
	<!-- 
	=============================================
		Banner - OFICINA VIRTUAL
	============================================== 
	-->
	<div class="callout-banner section-spacing">
		<div class="container clearfix">
			<h3 class="title">Accede a nuestra Oficina Virtual</h3>
			<p>Accede a <a href="https://penalver.sigeat.com/login" style="color:white" target="_blank">SAT Peñalver</a> y realiza tus pagos de forma segura. Ingresa, registrate e inicia sesión. De ti depende el crecimiento de nuestro municipio.</p>
			<a href="https://penalver.sigeat.com/login"  target="_blank" class="theme-button-one">ACCEDER</a>
		</div>
	</div> <!-- /.callout-banner -->

	<!-- 
	=============================================
		NOTICIAS
	============================================== 
	-->
	<div class="blog-grid section-spacing">
		<div class="container">
			<div class="theme-title-one">
				<h2>Noticias</h2>
			</div><br /> <!-- /.theme-title-one -->
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-12 our-blog">
					<div class="post-wrapper row">
						<div class="col-md-6 col-12">
							<div class="single-blog">
								<div class="image-box">
									<img src="{{ asset($noticia[0]->path_image) }}" alt="">
									<div class="overlay"><a href="#" class="date">{{ $noticia[0]->fecha }}</a></div>
								</div> <!-- /.image-box -->
								<div class="post-meta">
									<h5 class="title"><a href="#" id="{{ $noticia[0]->id }}" class="noticiaClick" style="text-align: justify;">{{ $noticia[0]->title }}</a></h5>
									<p class="truncate" style="text-align: justify;">{{ $noticia[0]->descripcion }}</p>
									<a href="#" id="{{ $noticia[0]->id }}" class="noticiaClick read-more">Leer</a>
								</div> <!-- /.post-meta -->
							</div> <!-- /.single-blog -->
						</div> <!-- /.col- -->
						<div class="col-md-6 col-12">
							<div class="single-blog">
								<div class="image-box">
									<img src="{{ asset($noticia[1]->path_image) }}" alt="">
									<div class="overlay"><a href="#" class="date">{{ $noticia[1]->fecha }}</a></div>
								</div> <!-- /.image-box -->
								<div class="post-meta">
									<h5 class="title"><a href="#" id="{{ $noticia[1]->id }}" class="noticiaClick" style="text-align: justify;">{{ $noticia[1]->title }}</a></h5>
									<p class="truncate" style="text-align: justify;">{{ $noticia[1]->descripcion }}</p>
									<a href="#" id="{{ $noticia[1]->id }}" class="noticiaClick read-more">Leer</a>
								</div> <!-- /.post-meta -->
							</div> <!-- /.single-blog -->
						</div> <!-- /.col- -->
					</div> <!-- /.post-wrapper -->
				</div>
				<!-- ===================== Blog Sidebar ==================== -->
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
					<div class="sidebar-container sidebar-recent-post">
						<h5 class="title">Noticias</h5>
						<ul>
							<li class="clearfix">
								<img src="{{ asset($noticia[2]->path_image) }}" alt="" class="float-left">
								<div class="post float-left">
									<a href="#" id="{{ $noticia[2]->id }}" class="noticiaClick"><p class="truncate1" style="text-align: justify;">{{ $noticia[2]->title }}</p></a>
									<div class="date">{{ $noticia[2]->fecha }}</div>
								</div>
							</li>
							<li class="clearfix">
								<img src="{{ asset($noticia[3]->path_image) }}" alt="" class="float-left">
								<div class="post float-left">
									<a href="#" id="{{ $noticia[3]->id }}" class="noticiaClick"><p class="truncate1" style="text-align: justify;">{{ $noticia[3]->title }}</p></a>
									<div class="date">{{ $noticia[3]->fecha }}</div>
								</div>
							</li>
							<li class="clearfix">
								<img src="{{ asset($noticia[4]->path_image) }}" alt="" class="float-left">
								<div class="post float-left">
									<a href="#" id="{{ $noticia[4]->id }}" class="noticiaClick"><p class="truncate1" style="text-align: justify;">{{ $noticia[4]->title }}</p></a>
									<div class="date">{{ $noticia[4]->fecha }}</div>
								</div>
							</li>
							<li class="clearfix">
								<img src="{{ asset($noticia[5]->path_image) }}" alt="" class="float-left">
								<div class="post float-left">
									<a href="#" id="{{ $noticia[5]->id }}" class="noticiaClick"><p class="truncate1" style="text-align: justify;">{{ $noticia[5]->title }}</p></a>
									<div class="date">{{ $noticia[5]->fecha }}</div>
								</div>
							</li>
						</ul>
					</div> <!-- /.sidebar-recent-post -->
				</div> <!-- /.col- -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.blog-inner-page -->


	<!--
	=====================================================
		Banner CONCURSO
	=====================================================
	-->
	<div class="short-banner section-spacing">
		<div class="overlay">
			<div class="container">
				<h2><br> Contrataciones Públicas</h2>
				<a href="{{ route('postulaciones.view') }}" class="theme-button-one">ACCEDER</a></div>
		</div> <!-- /.overlay -->
	</div> <!-- /.short-banner -->	

	<!-- 
	=============================================
		NUESTRO MUNICIPIO
	============================================== 
	-->
	<div class="about-compnay-two section-spacing">
		<div class="overlay">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-7 col-12 text">
						<div class="theme-title-one">
							<h2>Nuestro Municipio</h2>
						</div>
						<p style="text-align: justify;">El Municipio Fernando de Peñalver, es uno de los 21 municipios que forman 
							parte del Estado Anzoátegui, Venezuela. Está ubicado al noroeste de dicho 
							Estado, tiene una superficie de 643 km² y una población de 36.271 habitantes (2023). 
							El Municipio Peñalver está dividido en tres parroquias, Puerto Píritu, 
							San Miguel y Sucre. Su capital es la ciudad de Puerto Píritu.

							En su territorio se encuentran dos lagunas más grandes del Estado Anzoátegui, 
							la Laguna de Puerto Píritu y la Laguna de Unare.</p>
					</div> <!-- /.col- -->
					<div class="col-lg-5 col-12">
						<div class="image-container">
							<img src="{{ asset('images/portfolio/7.jpg') }}" alt="" class="img-fluid">
						</div>
					</div>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.about-compnay-two -->


	<!-- 
	=============================================
		GALERIA
	============================================== 
	-->
	<div class="our-case section-spacing">
		<div class="container">
			<div class="theme-title-one">
				<h2>Galería</h2>
				<p>El Municipio Francisco Peñalver, el destino turistico preferido para los visitantes</p>
			</div> <!-- /.theme-title-one -->
			<div class="wrapper">
				<div class="row">
				
					@foreach($galeria as $item)
						<div class="col-lg-4 col-sm-6 col-12">
							<div class="single-case-block">
								<img src="{{ asset($item->path_image) }}" alt="Imagen de {{ $item->title }}">
								<div class="hover-content">
									<div class="text clearfix">
										<div class="float-left">
											<h5><a href="project-details.html">{{ $item->title }}</a></h5>
										</div>
									</div> <!-- /.text -->
								</div> <!-- /.hover-content -->
							</div> <!-- /.single-case-block -->
						</div> <!-- /.col- -->
					@endforeach
					
				</div> <!-- /.row -->
			</div> <!-- /.wrapper -->
			<div class="view-all"><a href="{{ route('galeria.view') }}" class="theme-button-one">Mostrar</a></div>
		</div> <!-- /.container -->
	</div> <!-- /.our-case -->


	<!--
	=====================================================
		VIDEO - ULTIMO EVENTO
	=====================================================
	-->
	<div class="faq-section">
		<div class="overlay">
			<div class="container">
				<div class="theme-title-one">
					<h2>Ultimo Evento</h2>
				</div> <!-- /.theme-title-one -->

				<div class="wrapper row no-gutters">
					<div class="col-xl-6 col-lg-7 order-last">
						<div class="faq-content">
							<div class="accordion-one">
								<div class="panel-group theme-accordion" id="accordion">										  
									<div class="panel">

										@if($video)
											
											<div class="panel-heading active-panel">
												<h6 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">{{ $video->title }}</a>
												</h6>
											</div>
											<div id="collapse2" class="panel-collapse collapse show">
												<div class="panel-body">
												<p class="truncate2" style="text-align: justify;">Descripcion: {{ $video->descripcion }}</p>
												</div>
											</div>

										@else
											<div class="panel-heading active-panel">
												<h6 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Titulo del Evento</a>
												</h6>
											</div>
											<div id="collapse2" class="panel-collapse collapse show">
												<div class="panel-body">
												<p style="text-align: justify;">Descripcion: Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
													Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
													took a galley of type and scrambled it to make a type specimen book. It has survived not only five 
													centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was 
													popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and 
													more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
												</div>
											</div>
										@endif
									
									</div> <!-- /panel 2 -->
								</div> <!-- end #accordion -->
							</div> <!-- End of .accordion-one -->
						</div> <!-- /.faq-content -->
					</div> <!-- /.col- -->
					<div class="col-xl-6 col-lg-5 order-first"><div class="img-box"><a data-fancybox href="https://www.youtube.com/watch?v=tMCQZNPblfU&ab_channel=JOSEGUAINA" class="play"><i class="fa fa-play" aria-hidden="true"></i></a></div></div>
				</div> <!-- /.wrapper -->
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.faq-section -->


	<!--
	=====================================================
		Eventos mas recientes
	=====================================================
	-->
	<div class="our-blog latest-news section-spacing">
		<div class="container">
			<div class="theme-title-one">
				<h2>Lo mas Reciente...</h2>
			</div> <!-- /.theme-title-one -->
			<div class="wrapper">
				<div class="clearfix">
					<div class="latest-news-slider">

						@foreach($eventos as $item)
							<div class="item">
								<div class="single-blog">
									<div class="image-box">
										<img src="{{ asset($item->path_image) }}" alt="Imagen de {{ $item->title }}">
									</div> <!-- /.image-box -->
									<div class="post-meta">
										<h5 class="title">{{ $item->title }}</h5>
									</div> <!-- /.post-meta -->
								</div> <!-- /.single-blog -->
							</div> <!-- /.col- -->
						@endforeach						
						
					</div> <!-- /.latest-news-slider -->
				</div> <!-- /.row -->
			</div> <!-- /.wrapper -->
		</div> <!-- /.container -->
	</div> <!-- /.our-blog -->

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function () {
			const paragraphs = document.querySelectorAll(".truncate"); // Selecciona todos los elementos con la clase "truncate"
			const maxLength = 100; // Ajusta el número de caracteres que deseas permitir

			paragraphs.forEach(paragraph => {
				const originalText = paragraph.textContent.trim();

				if (originalText.length > maxLength) {
				paragraph.textContent = originalText.substring(0, maxLength) + "...";
				}
			});

			const paragraphs1 = document.querySelectorAll(".truncate1"); // Selecciona todos los elementos con la clase "truncate"
			const maxLength1 = 40; // Ajusta el número de caracteres que deseas permitir

			paragraphs1.forEach(paragraph1 => {
				const originalText1 = paragraph1.textContent.trim();

				if (originalText1.length > maxLength1) {
				paragraph1.textContent = originalText1.substring(0, maxLength1) + "...";
				}
			});
			

			const paragraphs2 = document.querySelectorAll(".truncate2"); // Selecciona todos los elementos con la clase "truncate"
			const maxLength2 = 790; // Ajusta el número de caracteres que deseas permitir

			paragraphs2.forEach(paragraph2 => {
				const originalText2 = paragraph2.textContent.trim();

				if (originalText2.length > maxLength2) {
				paragraph2.textContent = originalText2.substring(0, maxLength2) + "...";
				}
			});
		});

		$(document).ready(function (){

			$('.noticiaClick').on('click', function (e){
				e.preventDefault();

				let noticiaId = this.id; // Obtener el ID de la noticia
				let ruta = "{{ url('/show-noticia') }}/" + noticiaId; // Construir la URL

				window.location.href = ruta; // Redirigir a la vista de Laravel
			});
		});
	</script>
@endsection
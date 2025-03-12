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
				<h2>Noticias</h2>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->

	<!-- 
	=============================================
		Our Blog
	============================================== 
	-->
	<div class="our-blog section-spacing">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-12">
					<div class="post-wrapper blog-details">
						<div class="single-blog">
							<div class="image-box">
								<img src="{{ asset($noticia->path_image) }}" alt="">
								<div class="overlay"><a href="#" class="date">{{ $noticia->fecha }}</a></div>
							</div> <!-- /.image-box -->
							<div class="post-meta">
								<h5 class="title">{{ $noticia->title }}</h5>
								<p style="text-align: justify;">{{ $noticia->descripcion }}</p>
							</div> <!-- /.post-meta -->
						</div> <!-- /.single-blog -->
					</div> <!-- /.post-wrapper -->
				</div>
				<!-- ===================== Blog Sidebar ==================== -->
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
					<div class="sidebar-container sidebar-recent-post">
						<h5 class="title">Otras Noticias</h5>
						<ul>
							<li class="clearfix">
								<img src="{{ asset($noticias[0]->path_image) }}" alt="" class="float-left">
								<div class="post float-left">
									<a href="#" id="{{ $noticias[0]->id }}" class="noticiaClick"><p class="truncate1" style="text-align: justify;">{{ $noticias[0]->title }}</p></a>
									<div class="date">{{ $noticias[0]->fecha }}</div>
								</div>
							</li>
							<li class="clearfix">
								<img src="{{ asset($noticias[1]->path_image) }}" alt="" class="float-left">
								<div class="post float-left">
									<a href="#" id="{{ $noticias[1]->id }}" class="noticiaClick"><p class="truncate1" style="text-align: justify;">{{ $noticias[1]->title }}</p></a>
									<div class="date">{{ $noticias[1]->fecha }}</div>
								</div>
							</li>
							<li class="clearfix">
								<img src="{{ asset($noticias[2]->path_image) }}" alt="" class="float-left">
								<div class="post float-left">
									<a href="#" id="{{ $noticias[2]->id }}" class="noticiaClick"><p class="truncate1" style="text-align: justify;">{{ $noticias[2]->title }}</p></a>
									<div class="date">{{ $noticias[2]->fecha }}</div>
								</div>
							</li>
							<li class="clearfix">
								<img src="{{ asset($noticias[3]->path_image) }}" alt="" class="float-left">
								<div class="post float-left">
									<a href="#" id="{{ $noticias[3]->id }}" class="noticiaClick"><p class="truncate1" style="text-align: justify;">{{ $noticias[3]->title }}</p></a>
									<div class="date">{{ $noticias[3]->fecha }}</div>
								</div>
							</li>
							<li class="clearfix">
								<img src="{{ asset($noticias[4]->path_image) }}" alt="" class="float-left">
								<div class="post float-left">
									<a href="#" id="{{ $noticias[4]->id }}" class="noticiaClick"><p class="truncate1" style="text-align: justify;">{{ $noticias[4]->title }}</p></a>
									<div class="date">{{ $noticias[4]->fecha }}</div>
								</div>
							</li>
						</ul>
					</div> <!-- /.sidebar-recent-post -->
				</div> <!-- /.col- -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.blog-details -->


	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function () {

			const paragraphs1 = document.querySelectorAll(".truncate1"); // Selecciona todos los elementos con la clase "truncate"
			const maxLength1 = 40; // Ajusta el número de caracteres que deseas permitir

			paragraphs1.forEach(paragraph1 => {
				const originalText1 = paragraph1.textContent.trim();

				if (originalText1.length > maxLength1) {
				paragraph1.textContent = originalText1.substring(0, maxLength1) + "...";
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
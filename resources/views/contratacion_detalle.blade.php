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
				<h2>Contratacion Publica</h2>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->
	

	<div class="faq-page section-spacing">
		<div class="container">
			<div class="theme-title-one text-center">
				<h4>{{ $contratacion->llamado }}</h4>
				
				<!-- Imagen centrada y más grande -->
				<div class="d-flex justify-content-center">
					<img src="{{ asset('images/logo/logo_alcaldia_contrata.png') }}" 
						class="img-fluid rounded shadow-lg" 
						alt="Logo Alcaldía"
						style="max-width: 80%; height: auto;">
				</div>

				<!-- Texto centrado -->
				<p class="mt-3">{{ $contratacion->title }}</p>
			</div> <!-- /.theme-title-one -->

			<!-- Texto en negrita y alineado a la izquierda -->
        	<p class="mt-3 text-start" style="font-weight: bold;">Pliego de Condiciones</p>

			<p class="mt-3 text-start">{!! nl2br(e($contratacion->condiciones)) !!}</p>

			<!-- Texto en negrita y alineado a la izquierda -->
        	<p class="mt-3 text-start" style="font-weight: bold;">Aclaratorias:</p>

			<p class="mt-3 text-start">{!! nl2br(e($contratacion->aclaratorias)) !!}</p>

			<!-- Texto en negrita y alineado a la izquierda -->
        	<p class="mt-3 text-start" style="font-weight: bold;">Acto de Recepcion y Apertura de Sobres:</p>

			<p class="mt-3 text-start">{!! nl2br(e($contratacion->recepcion)) !!}</p>
		</div> <!-- /.container -->
	</div> <!-- /.faq-page -->



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
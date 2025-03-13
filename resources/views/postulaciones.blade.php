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
				<h2>Postulate</h2>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->

	<!-- 
	=============================================
		Our Solution
	============================================== 
	-->
	<div class="our-solution section-spacing">
		<div class="container">
			<div class="theme-title-one">
				<h2>Contrataciones Públicas</h2>
			</div> <!-- /.theme-title-one -->
			<div class="wrapper">
				<div class="row">
					@foreach($contrataciones as $item)
						<div class="col-lg-4 col-sm-6 col-12">
							<div class="single-solution-block">
								<img src="{{ asset('images/logo/logo_alcaldia_contrata.png') }}" alt="" class="icon">
								<h5><a href="#" id="{{ $item->id }}" class="contratacionClick">{{ $item->llamado }}</a></h5>
								<p>{{ $item->title }}</p>
							</div> <!-- /.single-solution-block -->
						</div> <!-- /.col- -->
					@endforeach		
				</div> <!-- /.row -->
			</div> <!-- /.wrapper --><br /><br />

			<!-- Paginación -->
			{{ $contrataciones->links() }}
		</div> <!-- /.container -->
	</div> <!-- /.our-solution -->


	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function (){

			$('.contratacionClick').on('click', function (e){
				e.preventDefault();

				let contratacionId = this.id; // Obtener el ID de la contratacion
				let ruta = "{{ url('/show-contratacion') }}/" + contratacionId; // Construir la URL

				window.location.href = ruta; // Redirigir a la vista de Laravel
			});
		});
	</script>
@endsection
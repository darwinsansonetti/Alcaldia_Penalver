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
				<h2>Galería</h2>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->


	<!-- 
	=============================================
		Our Case
	============================================== 
	-->
	<div class="our-case our-project section-spacing">
		<div class="container">
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
			
			<!-- Paginación -->
			{{ $galeria->links() }}
		</div> <!-- /.container -->
	</div> <!-- /.our-case -->

@endsection
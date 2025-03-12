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
		Service Details
	============================================== 
	-->
	<div class="service-details section-spacing">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-12">
					<div class="service-content">
						<img src="images/home/20.jpg" alt="" class="cover-img">
						<h3 class="main-title">Titulo de la Noticia</h3>
						<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government  apartment in the sky moving on up to the east side a family to explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card attached would say thank you for being a friend.</p>
						<p>That this group would somehow form a family that's the way we all became the Brady Bunch apartment in the sky moving on up to the east side a family to explore strange new worlds.</p>
						<p>This tropic port aboard this tiny ship today still wanted by the government apartment in the sky moving on up to the east side a family to explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift would be from me and the card.</p>
					</div> <!-- /.service-content -->
				</div> <!-- /.col- -->

				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 theme-sidebar-one">
					<div class="sidebar-box service-categories">
						<h5 class="title">Otras noticias</h5>
						<ul>
							<li><a href="{{ route('noticia.view') }}">Noticia 1</a></li>
							<li><a href="{{ route('noticia.view') }}">Noticia 2</a></li>
							<li><a href="{{ route('noticia.view') }}">Noticia 3</a></li>
							<li><a href="{{ route('noticia.view') }}">Noticia 4</a></li>
							<li><a href="{{ route('noticia.view') }}">Noticia 5</a></li>
							<li><a href="{{ route('noticia.view') }}">Noticia 6</a></li>
						</ul>
					</div> <!-- /.service-categories -->
				</div> <!-- /.theme-sidebar-one -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.service-details -->

@endsection
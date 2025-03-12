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
				<h2>Nuestro Alcalde</h2>
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.theme-inner-banner -->

	<!-- 
	=============================================
		About Company Stye Two
	============================================== 
	-->
	<div class="about-compnay-two no-bg section-spacing">
		<div class="overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12 text order-lg-last">
						<div class="theme-title-one">
							<h2>Carlos Marcano</h2>
						</div> <!-- /.theme-title-one -->
						<p style="text-align: justify;">Nació en Barcelona hace 51 años. Está casado con Karla de Marcano. Tiene 4 hijos. Llego a Pto. Piritu 
							hace 27 años a laborar en la industria petrolera, en la cual se mantuvo por 18 años. Luego de su retiro,
							inicio su labor social, creando la "Fundación Valy", con la intención de llevar mejor calidad de vida a
							los más necesitados.

							Con 17 años como presidente de la Fundación, Marcano ha realizado una gran labor social para los habitantes
							del municipio, entregando insumos médicos, medicinas y atendiendo a los más necesitados. 

							Asumo el cargo de alcalde, siendo elegido por el poder popular. Antes de esto, siempre estuvo vinculado 
							al sector comercial privado. Uno de los puntos más importantes para Carlos Marcano desde que asumió la 
							alcaldía del municipio Francisco Peñalver, ha sido impulsar el turismo y recuperar la economía del municipio.
						</p>
						<img src="images/home/sign-black.png" alt="" class="sign">
					</div> <!-- /.col- -->
					<div class="col-lg-6 col-12 order-lg-first">
						<img src="{{ asset('images/home/alcalde.png') }}" alt="" class="left-img">
					</div>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.overlay -->
	</div> <!-- /.about-compnay-two -->

@endsection
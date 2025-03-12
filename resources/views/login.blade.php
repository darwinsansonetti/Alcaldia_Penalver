@extends('layout.layout_page')

@section('content')

	<!-- ===================================================
		Loading Transition
	==================================================== -->
	<div id="loader-wrapper">
		<div id="loader"></div>
	</div>

	<!--
	=====================================================
		Free Consultation
	=====================================================
	-->
	<div class="consultation-form section-spacing">
		<div class="container">
			<div class="theme-title-one">
				<h2>Inicio de Sesión</h2>
				<p>Acceso al Sistema Administrador (Sólo para uso administrativo)</p>
			</div> <!-- /.theme-title-one -->
			@if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Verifique</strong><br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
			<div class="clearfix main-content no-gutters row">
				<div class="col-xl-6 col-lg-5 col-12"><div class="img-box"></div></div>
				<div class="col-xl-6 col-lg-7 col-12">
					<div class="form-wrapper">
						<form class="theme-form-one" action="{{route('login.login')}}" method="POST">
						@csrf
							<div class="row">
								<div class="col-md-12"><input type="text" id="email" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}"></div>
								<div class="col-md-12"><input type="password" id="password" name="password" placeholder="Contraseña"></div>
							</div> <!-- /.row -->
							<button type="submit" class="theme-button-one">Iniciar Sesión</button>
						</form>
					</div> <!-- /.form-wrapper -->
				</div> <!-- /.col- -->
			</div> <!-- /.main-content -->
		</div> <!-- /.container -->
	</div> <!-- /.consultation-form -->	

@endsection
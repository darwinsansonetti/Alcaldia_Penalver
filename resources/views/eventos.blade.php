@extends('layout.layout_admin')

@section('content')

<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <!-- Botón alineado a la derecha -->
            <div class="d-flex justify-content-end mb-3">
				<button onclick="show_video()" class="btn btn-success">Nuevo Video</button>
				<button onclick="ver()" class="btn btn-primary" style="margin-left: 10px;">Nuevo Evento</button>
			</div>
			<br>
            <!-- Tabla -->
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th style="width:40%">Titulo</th>
                        <th style="width:30%">Path</th>
                        <th style="text-align: center; width:10%">Activa</th>
                        <th style="text-align: center; width:20%">Opcion</th>
                    </tr>
                </thead>
                <tbody>
					@foreach ($eventos as $_evento)
						<tr>
							<td style="width:40%">{{ $_evento->title }}</td>
							<td style="width:30%">{{ $_evento->path_image }}</td>
							<td style="text-align: center; width:10%">
								@if($_evento->activo == 1) 
									S
								@endif

								@if($_evento->activo == 0) 
									N
								@endif
							</td>
							<td style="text-align: center; width:20%">								
								@if($_evento->activo == 1) 
									<a href="#" id="{{ $_evento->id }}" class="desactivarClick btn btn-sm btn-warning">Desactivar</a>
								@else
									<a href="#" id="{{ $_evento->id }}" class="activarClick btn btn-sm btn-warning">Activar</a>
								@endif								
							</td>
						</tr>
					@endforeach  
                </tbody>
                <tfoot>
                    <tr>
						<th style="width:40%">Titulo</th>
                        <th style="width:30%">Path</th>
                        <th style="text-align: center; width:10%">Activa</th>
                        <th style="text-align: center; width:20%">Opcion</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<!-- Agregar la paginación debajo de la tabla -->
<div class="d-flex justify-content-center">
    {{ $eventos->links() }}
</div>

<!-- ===========Modal Carton========== -->
<div class="modal fade" name = "createModal" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 style="color:black;" class="modal-title fs-5" id="solicitudLabel">Evento</h5>
			</div>
			<div class="modal-body">
				<div class="container-fluid">		</br>			
					<form id="galeriaForm" enctype="multipart/form-data">
						<div class="row">
							<div style="color:black;" class="col-md-6">
								<h8 style="color:black;">Titulo:</h8>
							</div>
							<div style="color:black;" class="col-md-6">							
								<input type="text" style="padding: 1px; border-style: solid; border-width: 2px; border-color: black;" id="titulo" name="titulo">
							</div>
						</div><br/>
						<div class="row">
							<div style="color:black;" class="col-md-12">							
								<input type="file" id="imagen" name="imagen">
								<h8 style="color:red;">Medidas Recomendadas 360 x 310</h8>
							</div>
						</div>	
							
						<h8 style="color:red;" id="mensaje"></h8>
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"></br>
						<button type="button" onclick="guardar_evento()" class="btn btn-secondary">Guardar</button>
					</form>
				</div>	</br>
			</div>
		</div>
	</div>
</div>
<!-- ===========Modal Carton========== -->

<!-- ===========Modal videos========== -->
<div class="modal fade" name = "createModalvideo" id="createModalvideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 style="color:black;" class="modal-title fs-5" id="solicitudLabel">Video</h5>
			</div>
			<div class="modal-body">
				<div class="container-fluid">		</br>			
					<form id="videoForm" enctype="multipart/form-data">
						<div class="row">
							<div style="color:black;" class="col-md-6">
								<h8 style="color:black;">Titulo:</h8>
							</div>
							<div style="color:black;" class="col-md-6">							
								<input type="text" style="padding: 1px; border-style: solid; border-width: 2px; border-color: black;" id="titulo1" name="titulo1">
							</div>
						</div><br/>
						<div class="row">
							<div style="color:black;" class="col-md-6">
								<h8 style="color:black;">URL:</h8>
							</div>
							<div style="color:black;" class="col-md-6">							
								<input type="text" style="padding: 1px; border-style: solid; border-width: 2px; border-color: black;" id="url1" name="url1">
							</div>
						</div><br/>
						<div class="row">
							<div style="color:black;" class="col-md-6">
								<h8 style="color:black;">Descripcion:</h8>
							</div>
							<div style="color:black;" class="col-md-6">							
								<textarea name="descripcion1" id="descripcion1" rows="5" cols="23"></textarea>
							</div>
						</div>	
							
						<h8 style="color:red;" id="mensaje1"></h8>
						<input type="hidden" name="_token1" id="token1" value="{{ csrf_token() }}"></br>
						<button type="button" onclick="guardar_video()" class="btn btn-secondary">Guardar</button>
					</form>
				</div>	</br>
			</div>
		</div>
	</div>
</div>
<!-- ===========Modal videos========== -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	
	$(document).ready(function (){

		$.ajaxSetup({
			headers: {		
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('.activarClick').on('click', function (e){
			e.preventDefault();

			if (confirm("Desea activar este Evento?") == true) {
				let ruta = "{{ url('/active/evento') }}";
				ruta += "/" + this.id +  "/" + 1;

				$.ajax({
					type: "GET",
					url: ruta,
					success: function(response){
						if(response){
							window.location.reload();
						}
					}
				});
			}
		});

		$('.desactivarClick').on('click', function (e){
			e.preventDefault();

			if (confirm("Desea desactivar este Evento?") == true) {
				let ruta = "{{ url('/active/evento') }}";
				ruta += "/" + this.id +  "/" + 0;

				$.ajax({
				type: "GET",
				url: ruta,
				success: function(response)
					{
						if(response){
							window.location.reload();
						}
					}
				});
			} 
		});
	});

	function show_video(){

		$('#createModalvideo').modal('show');
	}

	function ver(){

		$('#createModal').modal('show');
	}

	function guardar_evento() {
		var titulo = document.getElementById("titulo").value;
		var imagenInput = document.getElementById("imagen");
		var imagen = imagenInput.files[0]; // Obtener el archivo seleccionado
		var mensaje = document.getElementById("mensaje");

		// Validar que se ingresó un título
		if (!titulo.trim()) {
			mensaje.innerText = "Por favor, ingrese un título.";
			mensaje.style.color = "red";
			return;
		}

		// Validar que se seleccionó un archivo
		if (!imagen) {
			mensaje.innerText = "Por favor, seleccione una imagen.";
			mensaje.style.color = "red";
			return;
		}

		// Validar que el archivo sea una imagen (formatos permitidos)
		var formatosPermitidos = ["image/jpeg", "image/png", "image/jpg"];
		if (!formatosPermitidos.includes(imagen.type)) {
			mensaje.innerText = "Formato no permitido. Solo se aceptan imágenes (JPG, PNG).";
			mensaje.style.color = "red";
			return;
		}

		// Validar tamaño de la imagen (máximo 2MB)
		var tamañoMaximo = 2 * 1024 * 1024; // 2MB
		if (imagen.size > tamañoMaximo) {
			mensaje.innerText = "La imagen es demasiado grande. Máximo 2MB.";
			mensaje.style.color = "red";
			return;
		}

		// Si pasa las validaciones, enviar el formulario
		mensaje.innerText = "";
		var formData = new FormData(document.getElementById("galeriaForm"));

		fetch('/guardar-evento', {
			method: 'POST',
			body: formData,
			headers: {
				'X-CSRF-TOKEN': document.getElementById("token").value
			}
		})
		.then(response => response.json())
		.then(data => {
			if (data.success) {
				alert("Evento guardado con éxito.");
				location.reload();
			} else {
				mensaje.innerText = "Error al guardar el evento.";
				mensaje.style.color = "red";
			}
		})
		.catch(error => console.error("Error:", error));
	}

	function guardar_video() {
		var titulo = document.getElementById("titulo1").value;
		var url = document.getElementById("url1").value;
		var descripcion = document.getElementById("descripcion1").value;
		var mensaje = document.getElementById("mensaje1");

		// Validar que se ingresó un título
		if (!titulo.trim()) {
			mensaje.innerText = "Por favor, ingrese un título.";
			mensaje.style.color = "red";
			return;
		}

		// Validar que se ingresó un título
		if (!url.trim()) {
			mensaje.innerText = "Por favor, ingrese la URL del video.";
			mensaje.style.color = "red";
			return;
		}

		// Validar que se ingresó un título
		if (!descripcion.trim()) {
			mensaje.innerText = "Por favor, ingrese la descripcion del video.";
			mensaje.style.color = "red";
			return;
		}

		// Si pasa las validaciones, enviar el formulario
		mensaje.innerText = "";
		var formData = new FormData(document.getElementById("videoForm"));

		fetch('/guardar-video', {
			method: 'POST',
			body: formData,
			headers: {
				'X-CSRF-TOKEN': document.getElementById("token1").value
			}
		})
		.then(response => response.json())
		.then(data => {
			if (data.success) {
				alert("Video guardado con éxito.");
				location.reload();
			} else {
				mensaje.innerText = "Error al guardar el video.";
				mensaje.style.color = "red";
			}
		})
		.catch(error => console.error("Error:", error));
	}
</script>

@endsection
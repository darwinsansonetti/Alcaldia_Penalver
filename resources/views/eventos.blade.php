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
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="solicitudLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content shadow-lg rounded-4">
            
            <!-- Encabezado del Modal -->
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="solicitudLabel">Nuevo Evento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>

            <!-- Cuerpo del Modal -->
            <div class="modal-body bg-light">
                <form id="galeriaForm" enctype="multipart/form-data">
                    @csrf

                    <!-- Campo Título -->
                    <div class="mb-3">
                        <label for="titulo" class="form-label fw-bold">Título:</label>
                        <input type="text" class="form-control border-primary" id="titulo" name="titulo" required>
                    </div>

                    <!-- Campo Imagen -->
                    <div class="mb-3">
                        <label for="imagen" class="form-label fw-bold">Subir Imagen:</label>
                        <input type="file" class="form-control border-primary" id="imagen" name="imagen" required>
                        <div class="form-text text-danger">Medidas recomendadas: 360 x 310</div>
                    </div>

                    <!-- Mensaje de error -->
                    <div id="mensaje" class="text-danger fw-bold"></div>
					<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"></br>

                    <!-- Botones -->
                    <div class="text-end">
                        <button type="button" onclick="guardar_evento()" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ===========Modal Carton========== -->

<!-- ===========Modal videos========== -->
<div class="modal fade" id="createModalvideo" tabindex="-1" aria-labelledby="solicitudLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content shadow-lg rounded-4">
            
            <!-- Encabezado del Modal -->
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="solicitudLabel">Nuevo Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>

            <!-- Cuerpo del Modal -->
            <div class="modal-body bg-light">
                <form id="videoForm" enctype="multipart/form-data">
                    @csrf

                    <!-- Campo Título -->
                    <div class="mb-3">
                        <label for="titulo1" class="form-label fw-bold">Título:</label>
                        <input type="text" class="form-control border-primary" id="titulo1" name="titulo1" required>
                    </div>

                    <!-- Campo URL -->
                    <div class="mb-3">
                        <label for="url1" class="form-label fw-bold">URL:</label>
                        <input type="text" class="form-control border-primary" id="url1" name="url1" required>
                    </div>

                    <!-- Campo Descripción -->
                    <div class="mb-3">
                        <label for="descripcion1" class="form-label fw-bold">Descripción:</label>
                        <textarea class="form-control border-primary" id="descripcion1" name="descripcion1" rows="5" required></textarea>
                    </div>

                    <!-- Mensaje de error -->
                    <div id="mensaje1" class="text-danger fw-bold"></div>
					<input type="hidden" name="_token1" id="token1" value="{{ csrf_token() }}"></br>

                    <!-- Botones -->
                    <div class="text-end">
                        <button type="button" onclick="guardar_video()" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
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
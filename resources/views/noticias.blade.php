@extends('layout.layout_admin')

@section('content')

<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <!-- Botón alineado a la derecha -->
            <div class="d-flex justify-content-end mb-3">
                <button onclick="ver()" class="btn btn-primary">Nuevo Noticia</button>
            </div>
			<br>
            <!-- Tabla -->
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th style="width:40%">Titulo</th>
                        <th style="width:30%">Fecha</th>
                        <th style="text-align: center; width:10%">Activa</th>
                        <th style="text-align: center; width:20%">Opcion</th>
                    </tr>
                </thead>
                <tbody>
					@foreach ($noticias as $_noticia)
						<tr>
							<td style="width:40%">{{ $_noticia->title }}</td>
							<td style="width:30%">{{ $_noticia->fecha }}</td>
							<td style="text-align: center; width:10%">
								@if($_noticia->activo == 1) 
									S
								@endif

								@if($_noticia->activo == 0) 
									N
								@endif
							</td>
							<td style="text-align: center; width:20%">								
								@if($_noticia->activo == 1) 
									<a href="#" id="{{ $_noticia->id }}" class="desactivarClick btn btn-sm btn-warning">Desactivar</a>
								@else
									<a href="#" id="{{ $_noticia->id }}" class="activarClick btn btn-sm btn-warning">Activar</a>
								@endif								
							</td>
						</tr>
					@endforeach  
                </tbody>
                <tfoot>
                    <tr>
						<th style="width:40%">Titulo</th>
                        <th style="width:30%">Fecha</th>
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
    {{ $noticias->links() }}
</div>

<!-- ===========Modal Carton========== -->
<div class="modal fade" name = "createModal" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 style="color:black;" class="modal-title fs-5" id="solicitudLabel">Noticia</h5>
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
							<div style="color:black;" class="col-md-6">
								<h8 style="color:black;">Fecha:</h8>
							</div>
							<div style="color:black;" class="col-md-6">							
							<input type="date" id="fecha" name="fecha"
								style="width: 100%; padding: 1px; border-style: solid; border-width: 2px; border-color: black;"
								max="">
							</div>
						</div><br/>
						<div class="row">
							<div style="color:black;" class="col-md-6">
								<h8 style="color:black;">Descripcion:</h8>
							</div>
							<div style="color:black;" class="col-md-6">							
							<textarea name="descripcion" id="descripcion" rows="5" cols="23"></textarea>
							</div>
						</div><br/>
						<div class="row">
							<div style="color:black;" class="col-md-12">							
								<input type="file" id="imagen" name="imagen">
								<h8 style="color:red;">Medidas Recomendadas 1080 x 1350</h8>
							</div>
						</div>	
							
						<h8 style="color:red;" id="mensaje"></h8>
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"></br>
						<button type="button" onclick="guardar_noticia()" class="btn btn-secondary">Guardar</button>
					</form>
				</div>	</br>
			</div>
		</div>
	</div>
</div>
<!-- ===========Modal Carton========== -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

	document.addEventListener("DOMContentLoaded", function() {
        let today = new Date().toISOString().split("T")[0]; // Obtener la fecha actual en formato YYYY-MM-DD
        document.getElementById("fecha").setAttribute("max", today); // Establecer el atributo max
    });
	
	$(document).ready(function (){

		$.ajaxSetup({
			headers: {		
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('.activarClick').on('click', function (e){
			e.preventDefault();

			if (confirm("Desea activar esta Noticia?") == true) {
				let ruta = "{{ url('/active/noticia') }}";
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

			if (confirm("Desea desactivar esta Noticia?") == true) {
				let ruta = "{{ url('/active/noticia') }}";
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

	function ver(){

		$('#createModal').modal('show');
	}

	function guardar_noticia() {
		var titulo = document.getElementById("titulo").value;
		var fecha = document.getElementById("fecha").value;
		var descripcion = document.getElementById("descripcion").value;
		var imagenInput = document.getElementById("imagen");
		var imagen = imagenInput.files[0]; // Obtener el archivo seleccionado
		var mensaje = document.getElementById("mensaje");

		// Validar que se ingresó un título
		if (!titulo.trim()) {
			mensaje.innerText = "Por favor, ingrese un título.";
			mensaje.style.color = "red";
			return;
		}

		// Validar que se ingresó una fecha
		if (!fecha.trim()) {
			mensaje.innerText = "Por favor, seleccione una fecha.";
			mensaje.style.color = "red";
			return;
		}

		// Validar que se ingresó una fecha
		if (!descripcion.trim()) {
			mensaje.innerText = "Por favor, ingrese la descripcion.";
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

		fetch('/guardar-noticia', {
			method: 'POST',
			body: formData,
			headers: {
				'X-CSRF-TOKEN': document.getElementById("token").value
			}
		})
		.then(response => response.json())
		.then(data => {
			if (data.success) {
				alert("Noticia guardada con éxito.");
				location.reload();
			} else {
				mensaje.innerText = "Error al guardar la noticia.";
				mensaje.style.color = "red";
			}
		})
		.catch(error => console.error("Error:", error));
	}
</script>

@endsection
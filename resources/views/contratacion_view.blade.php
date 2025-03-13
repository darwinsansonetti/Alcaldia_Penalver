@extends('layout.layout_admin')

@section('content')

<br><br><br>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-10">
        @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <form id="contratacionesForm" enctype="multipart/form-data" 
              class="p-5 border border-primary rounded-4 shadow-lg bg-light">
            @csrf

            <h3 class="text-center text-primary mb-4">Formulario de Registro</h3>
            <p class="text-center text-secondary">Nota: En los campos Pliego de condiciones, Aclaratorias y Acto de recepción y apertura de sobre, puede utilizar ENTER para crear salto de linea.</p><br/>

            <!-- Primera fila con dos columnas -->
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label fw-bold">Título:</label>
                    <input type="text" name="titulo" id="titulo" class="form-control border-primary" required>
                </div>
                <div class="col">
                    <label class="form-label fw-bold">Llamado:</label>
                    <input type="text" name="llamado" id="llamado" class="form-control border-primary" required>
                </div>
            </div>

            <!-- Segunda fila con un textarea -->
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label fw-bold">Pliego de condiciones:</label>
                    <textarea name="pliego" id="pliego" class="form-control border-primary" rows="10" required></textarea>
                </div>
            </div>

            <!-- Tercera fila con un textarea -->
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label fw-bold">Aclaratorias:</label>
                    <textarea name="aclaratorias" id="aclaratorias" class="form-control border-primary" rows="4"></textarea>
                </div>
            </div>

            <!-- Cuarta fila con un textarea -->
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label fw-bold">Acto de recepción y apertura de sobre:</label>
                    <textarea name="acto_recepcion" id="acto_recepcion" class="form-control border-primary" rows="4"></textarea>
                </div>
            </div>

            <div id="mensaje" class="text-danger fw-bold"></div>
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

            <!-- Botón de envío -->
            <div class="text-center">
                <button type="button" onclick="guardar_contratacion()" class="btn btn-primary btn-lg w-50">Enviar</button>
            </div>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	
	$(document).ready(function (){

		$.ajaxSetup({
			headers: {		
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	});

	function guardar_contratacion() {
		var titulo = document.getElementById("titulo").value;
		var llamado = document.getElementById("llamado").value;
		var pliego = document.getElementById("pliego").value;
        var aclaratorias = document.getElementById("aclaratorias").value;
        var acto_recepcion = document.getElementById("acto_recepcion").value;
        
        var mensaje = document.getElementById("mensaje");

		// Validar que se ingresó un título
		if (!titulo.trim()) {
			mensaje.innerText = "Por favor, ingrese un título.";
			mensaje.style.color = "red";
			return;
		}

		// Validar que se seleccionó un archivo
		if (!llamado) {
			mensaje.innerText = "Por favor, ingrese el llamado a concurso.";
			mensaje.style.color = "red";
			return;
		}

        // Validar que se seleccionó un archivo
        if (!pliego) {
            mensaje.innerText = "Por favor, ingrese las condiciones.";
            mensaje.style.color = "red";
            return;
        }

        // Validar que se seleccionó un archivo
        if (!aclaratorias) {
            mensaje.innerText = "Por favor, ingrese las aclaratorias.";
            mensaje.style.color = "red";
            return;
        }

        // Validar que se seleccionó un archivo
        if (!acto_recepcion) {
            mensaje.innerText = "Por favor, ingrese la informacion para recepcion y apertura de sobres.";
            mensaje.style.color = "red";
            return;
        }

		// Si pasa las validaciones, enviar el formulario
		mensaje.innerText = "";
		var formData = new FormData(document.getElementById("contratacionesForm"));

		fetch('/guardar-contratacion', {
			method: 'POST',
			body: formData,
			headers: {
				'X-CSRF-TOKEN': document.getElementById("token").value
			}
		})
		.then(response => response.json())
		.then(data => {
			if (data.success) {
				alert("Contratacion publica creada con éxito.");
				location.reload();
			} else {
				mensaje.innerText = "Error al guardar la Contratacion publica.";
				mensaje.style.color = "red";
			}
		})
		.catch(error => console.error("Error:", error));
	}
</script>

@endsection
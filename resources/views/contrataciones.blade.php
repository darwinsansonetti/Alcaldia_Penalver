@extends('layout.layout_admin')

@section('content')

<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <!-- Botón alineado a la derecha -->
            <div class="d-flex justify-content-end mb-3">
				<a href="{{ route('contratacion.create') }}" class="btn btn-primary">Nueva Contratación</a>
            </div>
			<br>
            <!-- Tabla -->
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th style="width:40%">Titulo</th>
                        <th style="width:30%">Llamado</th>
                        <th style="text-align: center; width:10%">Activa</th>
                        <th style="text-align: center; width:20%">Opcion</th>
                    </tr>
                </thead>
                <tbody>
					@foreach ($contrataciones as $_contratacion)
						<tr>
							<td style="width:40%">{{ $_contratacion->title }}</td>
							<td style="width:30%">{{ $_contratacion->llamado }}</td>
							<td style="text-align: center; width:10%">
								@if($_contratacion->activo == 1) 
									S
								@endif

								@if($_contratacion->activo == 0) 
									N
								@endif
							</td>
							<td style="text-align: center; width:20%">								
								@if($_contratacion->activo == 1) 
									<a href="#" id="{{ $_contratacion->id }}" class="desactivarClick btn btn-sm btn-warning">Desactivar</a>
								@else
									<a href="#" id="{{ $_contratacion->id }}" class="activarClick btn btn-sm btn-warning">Activar</a>
								@endif								
							</td>
						</tr>
					@endforeach  
                </tbody>
                <tfoot>
                    <tr>
						<th style="width:40%">Titulo</th>
                        <th style="width:30%">Llamado</th>
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
    {{ $contrataciones->links() }}
</div>

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

			if (confirm("Desea activar esta Contratacion?") == true) {
				let ruta = "{{ url('/active/contratacion') }}";
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

			if (confirm("Desea desactivar esta Contratacion?") == true) {
				let ruta = "{{ url('/active/contratacion') }}";
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

	function show_new(){

		
	}
</script>

@endsection
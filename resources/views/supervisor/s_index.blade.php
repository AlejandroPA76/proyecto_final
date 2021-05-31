<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				listado de usuarios
				<div class="btn float-end">
				<a href="{{route('sCrear')}}" class="btn btn-success btn-sm float-end">Nuevo empleado</a>

				</div>				

		</div>

				<div class="card-body">
					
						@if(session('info'))
							<div class="alert alert-success">
							{{session('info')}}	
							</div>
						@endif
						<table class="table table-hover table-sm">
							<thead>
								<th>Nombre</th>
								<th>Apellido Paterno</th>
								<th>Apellido Materno</th>
								<th>Rol</th>
								<th>Usuario</th>
								<th>contrasena</th>

							</thead>

							<tbody>
								@foreach($MostrarProductos as $MostrarProducto)
								<tr>
									<td>
										{{$MostrarProducto->nombre}}
									</td>
									<td>
										{{$MostrarProducto->apellidosP}}
									</td>
									<td>
										{{$MostrarProducto->apellidosM}}
									</td>
									<td>
										{{$MostrarProducto->rol}}
									</td>
									<td>
										{{$MostrarProducto->usuario}}
									</td>
									<td>
										{{$MostrarProducto->contrasena}}
									</td>
								</tr>
								@endforeach()
							</tbody>
						</table>		
		</div>
		</div>
		</div>
		</div>
		</div>

</body>
</html>
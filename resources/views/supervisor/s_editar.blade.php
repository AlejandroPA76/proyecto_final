<!DOCTYPE html>
<html>
<head>
	<title>CrearProductos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	
<div class="container"><br>
	<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				Editar Usuario
				
		</div>
		<div class="card-body">
			<form action="{{route('modificarEmpleadoYa', $ModificarSuEmpleado->idUsuarioA)}}" method="POST">
				@method('put')
				@csrf
				<div class="form-group">
					<label for="">Nombre</label>
					<input type="text" value="{{$ModificarSuEmpleado->nombre}}" class="form-control" name="name" required="required">
				</div>
				<div class="form-group">
					<label for="">Apellido_Paterno</label>
					<input type="text" value="{{$ModificarSuEmpleado->apellidosP}}" class="form-control" name="apellido_p" required="required">
				</div>

				<div class="form-group">
					<label for="">Apellido_Materno</label>
					<input type="text" value="{{$ModificarSuEmpleado->apellidosM}}" class="form-control" name="apellido_m" required="required">
				</div>
				
				<div class="form-group">
					<label for="">Seleccione un rol</label>
    				<div class="radio" >
  					<input type="radio" name="rol" value="cliente">cliente</label>
					</div>

					<div class="radio">
  					<label><input type="radio" name="rol" value="encargado">encargado</label>
					</div>

					<div class="radio">
  					<label><input type="radio" name="rol" value="contador">contador</label>
					</div>

					<div class="radio">
  					<label><input type="radio" name="rol" value="supervisor">supervisor</label>
					</div>
 				
 				 </div>	
			   
				
					<div class="form-group">
					<label for="">Username</label>
					<input type="text" value="{{$ModificarSuEmpleado->usuario}}" class="form-control" name="username" required="required">
				</div>

					<div class="form-group">
					<label for="">Contrasena</label>
					<input type="text" value="{{$ModificarSuEmpleado->contrasena}}" class="form-control" name="password" required="required">
				</div>

				<div class="btn float-start">
					<button type="submit" class="btn btn-primary">Guardar</button>
				<a href="{{route('sIndex')}}" class="btn btn-danger">Cancelar</a>


				</div>
				</div>

			</form>
		</div>
	</div>	

	</div>


</div>
</body>
</html>
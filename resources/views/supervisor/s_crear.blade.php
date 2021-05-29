<!DOCTYPE html>
<html>
<head>
	<title>CrearProductos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	
<div class="container">
	<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				Crear Usuario
				
		</div>
		<div class="card-body">
			<form action="{{route('registrarEmpleado')}}" method="POST">
				@csrf
				<div class="form-group">
					<label for="">Nombre</label>
					<input type="text" class="form-control" name="nombre" required="required">
				</div>
				<div class="form-group">
					<label for="">Apellido_Paterno</label>
					<input type="text" class="form-control" name="apellido_paterno" required="required">
				</div>

				<div class="form-group">
					<label for="">Apellido_Materno</label>
					<input type="text" class="form-control" name="apellido_materno" required="required">
				</div>

				<label for="rol">Seleccionar un rol</label>
				<div class="form-group">
					
			    <select class="form-control" id="roles">
				  <option>Encargado</option>
				  <option>Cliente</option>
				  <option>Contador</option>
				  <option>Supervisor</option>
					<input type="hidden" id="roles" name="rol">
				</select>
				
					<div class="form-group">
					<label for="">Usuario</label>
					<input type="text" class="form-control" name="usuario" required="required">
				</div>

					<div class="form-group">
					<label for="">contrasena</label>
					<input type="password" class="form-control" name="contrasena" required="required">
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
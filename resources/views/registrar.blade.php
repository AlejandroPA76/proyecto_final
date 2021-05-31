<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Registrar</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
					<h1>     </h1>
					<form action="{{route('registrarEmpleado')}}" method="POST" >
						
						@csrf
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Nombre:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="ingresa tu nombre"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="apellido_p" class="cols-sm-2 control-label">Apellido Paterno:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="apellido_p" id="apellido_p"  placeholder="ingresa tu apellido paterno"/>
								</div>
							</div>
						</div>

            <div class="form-group">
              <label for="apellido_m" class="cols-sm-2 control-label">Apellido Materno:</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="apellido_m" id="apellido_m"  placeholder="ingresa tu apellido materno"/>
                </div>
              </div>
            </div>

						<div class="form-group">
							<input type="hidden" id="rol" name="rol" value="cliente">
						</div>


						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Usuario:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="nombre de usuario"/>
								</div>
							</div>
						</div>
						

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Constrasena:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="ingresa tu contrasena"/>
								</div>
							</div>
						</div>

					{{--<div class="form-group ">
					<a href="{{route('login')}}"  type="submit" class="btn btn-primary btn-lg btn-block ">Registrar</a></div>--}}

				{{--<div class="form-group ">
																		<button type="submit" class="btn btn-primary btn-lg btn-block ">Guardar</button> </div>--}}

					<div class="form-group">
						<a href="{{route('login')}}">
  					 <button type="submit">registrar</button>
					</a>
					</div>
					

					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
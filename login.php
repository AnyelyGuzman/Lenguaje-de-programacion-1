<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
		<style>
			#head-form{
				margin-top: 100px;
			}
			body{
				background-color: #000;
			}
		</style>
	</head>
	<body>
		<center>
		<div class="container">
			<aside class="col-sm-4">
				<div id="head-form" class="card">
					<article class="card-body">
						<h4 class="card-title text-center mb-4 mt-1">Inicio de sessión</h4>
						<hr>
						<form>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-user"></i> </span>
									</div>
									<input name="" class="form-control" placeholder="Usuario" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
									</div>
									<input class="form-control" placeholder="Contraseña" type="password">
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Ingresar</button>
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">Administrador</button>
							</div>
						</form>
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Administrador</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
      								<div class="modal-body">
									  	<form action="ejemplo.php" method="get">
											<div class="form-group">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text"> <i class="fa fa-user"></i> </span>
													</div>
													<input name="" class="form-control" placeholder="Nombre" type="email">
												</div>
											</div>
											<div class="form-group">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
													</div>
													<input class="form-control" placeholder="Contraseña" type="password">
												</div>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary btn-block">Ingresar</button>
											</div>
										</form>
     								</div>
      								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      								</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</aside>
		</div>
		</center>
	</body>
</html>
	<style type="text/css">
.bg {
    /* The image used */
    background-image: url("portada.png");

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login</title>
	<?php require("head.php") ?>
	<?php require("nav.php") ?>
</head>
<body class="bg">

<div class="container" style="padding-top:50px">
	<div class="row">
<div class="col-sm-12">
	<div class="col-sm-12">
		<center>
					<h1 class="text-light">¡Gestiona tus Render de Blender!</h1>
		</center>
		<p class="text-light">El mejor software que puede usar para gestionar tus render El mejor software que puede usar para gestionar tus render El mejor software que puede usar para gestionar tus render </p>
	</div>
</div>
	<div class="col-sm-12">
			<div class="col-sm-12 col-lg-5 offset-lg-3">
				<div class="card">
					<div class="card-body">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Entra</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Registrate</a>
						  </li>
						</ul>
						<div class="tab-content" id="myTabContent">
						  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						  	<br>
							<form  method="post" action="manager.php">
							  <div class="form-group">
							  	<label>Nombre</label>
							    <input type="text" class="form-control" >
							  </div>

							  <div class="form-group">
							  	<label>Contraseña</label>
							    <input type="password" class="form-control" >
							  </div>
							  <button type="submit" class="btn btn-primary">Entrar</button>
							</form>
						  </div>
						  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						  	<br>
							<form>
							  <div class="form-group">
							  	<label>Nombre</label>
							    <input type="text" class="form-control" >
							    <input type="text" class="form-control" >
							    <input type="text" class="form-control" >
							  </div>

							  <div class="form-group">
							  	<label>Contraseña</label>
							    <input type="password" class="form-control" >
							    <input type="password" class="form-control" >
							    <input type="password" class="form-control" >
							    <input type="password" class="form-control" >
							    <input type="password" class="form-control" >
							  </div>
							  <button type="submit" class="btn btn-primary">Entrar</button>
							</form>
						  </div>
						</div>
					</div>
				</div>
			</div>
	</div>			
	</div>
</div>
<?php 
		$autoplay  = "autoplay";

			if ($cent == 100) {
						echo '
			<audio controls '.$autoplay.'>
			  <source src="tune.mp3" type="audio/mp3">
			  Your browser does not support the audio tag.
			</audio>
		';
		$autoplay = "";
			}


		 ?>
</body>
<?php require("javascript.php") ?>
</html>
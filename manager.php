<i class="glyphicon glyphicon-asterisk"></i>
<span class="glyphicon glyphicon-asterisk"></span>
<?php require("delete-image.php") ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php require("head.php");?>
	<title>Blender CMS</title>


</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF']?>">Gestor de Render</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</header>
<body class="bg-dark">
	<div class="container">
	<div id="vista">
		<?php require("image-view.php") ?>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="aqui">
				<?php require("meter.php") ?>
			</div>
		 <table class="table table-sm table-striped table-hover table-dark">
		 	<thead>
		 		<tr>
		 			<th>Proyecto</th>
		 			<th>Fotogramas</th>
		 			<th>Duracion</th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 		<tr>
		 			<th></th>
		 			<th id="fps"><?php require("fps.php") ?></th>
		 			<th></th>
		 		</tr>
		 	</tbody>
		 </table>
		 <table class="table table-sm table-striped table-hover table-dark">
		 	<thead>
		 		<tr>
				 	<th>id</th>
				 	<th>Nombre</th>
				 	<th>Tiempo</th>
				 	<th></th>
				 	<th>Estado</th> 
				 	<th></th> 
		 		</tr>
		 	</thead>
		 	<tbody id="elementsList">
		 			<?php require("consulta.php") ?>
		 	</tbody>
		 </table>
		</div>
	</div>
</div>
</body>
	<?php require("javascript.php")?>
</html>
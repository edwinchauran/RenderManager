<?php 

	if (isset($_GET['send'])) 
	{
		$nombre = $_GET["nombre"];
		$fps = $_GET["fps"];
		$directorio = "./Proyectos/";
		if (!file_exists($directorio.$nombre)) {
			
			mkdir($directorio.$nombre);

			$base = mysqli_connect("localhost","root","","cmsblender");
			if ($base) { 
				$sql = 'INSERT INTO proyectos (fps) VALUES("'.$fps.'")';
				$resultado = mysqli_query($base, $sql);
				if ($resultado == false) {
					echo "error en la ejecucion de la consulta";
				}
			}
			else {
				printf("Error %d : %s.<br>".mysqli_errno(),
				mysqli_error());
			}
		echo "<script>
			setInterval( function(){
	     $('#group').load('lista.php');
	},1000)//Actualizamos cada 1 segundo (1000 ms)

</script>";
		}
		else {
			echo "<script>lmao();</script>";
		}

	} 
//echo dirname( __FILE__ );
?>

	<div class="">
		<a href="#"><img src="plus.png" width="10%"   id=""></a>
		<a href="#"><img src="dir.png" width="10%"></a>
		<div class="this"></div>


	</div>



			<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:70%">
    70%
  </div>
</div>

	<div class="col-sm-2">

			<button class="btn btn-primary" id="boton"> crear proyecto</button>
			<div id="this"></div>
			<div id="esto"></div>
		<ul class="list-group" id="group">
			<?php // require("lista.php") ?>
		</ul>
	</div>

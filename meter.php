<?php 
	$base = mysqli_connect("localhost","root","","cmsblender");
	$datos = array();
	if ($base) { 
		$sql = 'SELECT fps FROM proyectos';
		$resultado = mysqli_query($base, $sql) or die(msql_error());
	
		while ($registro = mysqli_fetch_assoc($resultado)) 
	        {
	  			$datos[] = $registro["fps"];
	  		}
	
		if ($resultado == false) {
			echo "error en la ejecucion de la consulta";
		}
	}
	else {
		printf("Error %d : %s.<br>".mysqli_errno(),
		mysqli_error());
	}

	$Directory = dir("img");
	$i = 0;
	   while (($archivo = $Directory->read()) == true)
	   {
			if ($archivo != "." && $archivo !== "..")
			{
				$i++;
			}
	   }
	$Directory->close();
//datos es el 100%
//$i es nuestra cantidad
	$cent = ($i * 100) / $datos[0];
	$percent = $cent . "%";
	$ready = "";

	if ($cent == 100) {
		$success = "bg-success";
		$ready = "Finalizado ";

	}
	elseif ($cent > 100) {
		$success = "bg-warning";
		$ready = "Finalizado con uno o más fotogramas";
		$percent = "";
	}
	elseif ($cent < 100) {
		$ready = "Procesando ";
	}
 ?>
<div class="progress">
  <div class="progress-bar progress-bar-striped <?php echo $success;?> progress-bar-animated w-<?php echo $cent; ?>" role="progressbar" style="width: <?php echo $cent; ?>%" aria-valuenow="<?php echo $i;?>" aria-valuemin="0" aria-valuemax="<?php echo $datos[0]?>"><?php echo $ready; echo $percent; ?></div>
</div>
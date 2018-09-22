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
	$cent = $i * $datos[0] / 100;
	if($cent >=	 50)
	{
		$casa = "bg-success";
	} 
		echo $i . " de " . $datos[0]?>
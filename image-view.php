<?php 
	if (isset($_GET['imagen'])) {
			$imagen = $_GET["imagen"];
			echo '<a href="#"><img src="img/'.$imagen.'" width="100%" id="imagenes"></a>';
	}
 ?>
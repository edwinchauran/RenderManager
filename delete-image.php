<?php 
	if (isset($_GET['id'])) {
			$name = $_GET["id"];
			$dir = "img/";
			$file = $dir.$name;
			if (is_file($file)) {
				unlink($file);
			}
		}
 ?>
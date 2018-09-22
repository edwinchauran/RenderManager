<?php
				$Directory = dir("img");
				$i = -1;
				$path = "./img/";


			    while (($archivo = $Directory->read()) == true)
			    {
			    	if ($archivo != "." && $archivo !== "..") {

			    		echo '
			    		<tr id="'."img".$i.'">
			    			<td>'.$i.'</td>
							<td>'.$archivo.'</td>
							<td>'.date("g:i:s", filemtime($path.$archivo)).'</td>
							<td><a href="manager.php?imagen='.$archivo.'">ver</a></td>
							<td class="bg-success">Listo</td>
							<td><a href="manager.php?id='.$archivo.'">Eliminar</a></td>
						</tr>
						 	';
			    	}
				    $i++;
			    }

				$Directory->close();
?>

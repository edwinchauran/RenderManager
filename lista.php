		<?php 
			$dir = './Proyectos';
			$file  = scandir($dir, 1);
				foreach ($file as &$valor)
				{
					if ($valor != "." && $valor !== "..")
					{
			    		echo '
			    			<a href="#"><li class="list-group-item">'.$valor.'</li></a>
			    		';
					}
				} 
		?>

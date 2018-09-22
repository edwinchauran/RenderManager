$().ready(function() {
		setInterval( function(){
	     $('#elementsList').load('consulta.php');
	},1000)//Actualizamos cada 1 segundo (1000 ms)

	setInterval( function(){
	     $('.aqui').load('meter.php');
	},1000)//Actualizamos cada 1 segundo (1000 ms)

	setInterval( function(){
	     $('#fps').load('fps.php');
	},1000)//Actualizamos cada 1 segundo (1000 ms)

	$("#imagenes").click(function(){
		$("#imagenes").hide();
	})
})
	
/**
	$("#boton").click(function(){
		$("#this").append('\n\
			<div class="form-group">\n\
				<form action="" method="GET">\n\
					<input required type="text" class="form-control" name="nombre" placeholder="Nombre">\n\
					<input required type="number" class="form-control" name="fps" placeholder="fps">\n\
					<input type="submit" class="btn btn-primary" name="send" value="crear">\n\
				</form>\n\
			</div>\n\
			')
		$("#boton").hide();	
	})

})
function lmao(){
	$().ready(function(){
		$('#esto').append("\n\
			<div class='alert alert-danger alert-dismissible'>\n\
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>\n\
		 <strong>Este nombre ya existe</strong>\n\
		</div>\n\
		");

		$("#this").append('\n\
			<div class="form-group">\n\
				<form action="" method="GET">\n\
					<input type="text" class="form-control" name="nombre" placeholder="Nombre">\n\
					<input type="number" name="fps" placeholder="fps">\n\
					<input type="submit" class="btn btn-primary" name="send" value="crear">\n\
				</form>\n\
			</div>\n\
			')
		$("#boton").hide();	
	})

**/


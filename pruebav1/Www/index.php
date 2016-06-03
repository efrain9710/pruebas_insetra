<!--elaborado por: Efrain Alfonso Gomez Castaño ADSI-2015, probando nuevas funciones con clase mediante herencia-->
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Formulario - Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<body>
	
	<?php 

		include('Clases/Graficos.php');

			$obj_gerarquia = new graficos();
			//echo $obj_gerarquia->retorna_fecha();
			//echo $obj_gerarquia->imprimir_titulo($obj_gerarquia->retorna_fecha());
			$obj_gerarquia->ini( $obj_gerarquia->servidor);
			//$obj_gerarquia->retornar_tabla();
			
			//echo $obj_gerarquia->escribir("SELECT * FROM tb_preguntas");
			//echo $obj_gerarquia->escribir("SELECT COUNT(id_jugador) as num_jugadores FROM tb_jugadores",1);


			

	?>

	<center><h1>TITULO</h1></center>
		<div class="container">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					
						<table class="table table-striped">
								<tbody>
								  <!-- Aplicadas en las celdas (<td> o <th>) -->
									
								  	<?php echo $obj_gerarquia->escribir("SELECT * FROM tb_usuarios"); ?>
								</tbody>
								<tbody>
								  	<?php //echo $obj_gerarquia->escribir("SELECT * FROM tb_usuarios"); ?>
								  			  	

								</tbody>
							</table>
				</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
		</div>

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!--<script type="text/javascript" src="../js/encuesta.js"></script>-->
		<script type="text/javascript"></script>


	
</body>
</html>
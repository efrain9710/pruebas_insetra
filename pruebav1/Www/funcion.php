<?php  

	echo insertar("tb_usuarios",[["1120580717","n_doc"],["Efrain","nombre"],["2016-06-03 00:00:00","fecha_nacimiento"]]); 
		
		function insertar($tabla, $campos)
		{
			
			$sql=" ";
			//echo $campos[0][0]."   ";
			//echo $campos[0][1]."<br>";
			//echo $campos[1][0]."   ";
			//echo $campos[1][1]."<br>";
			//echo $campos[2][0]."   ";
			//echo $campos[2][1]."<br>";
			
			$sql .="INSERT INTO ".$tabla." (".$campos[0][1].", ".$campos[1][1].", ".$campos[2][1].") VALUES ('".$campos[0][0]."', '".$campos[1][0]."', '".$campos[2][0]."')";

			Return conexion($sql);
		}

		function conexion($sql)
		{

			include('config.php');
			$con = mysqli_connect($servidor, $usuario, $clave, $bd);
			mysqli_select_db( $con, $bd);
			$respuesta =$con->query($sql);
			Return $respuesta;
		}
?>
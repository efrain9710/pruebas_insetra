<?php
	/*
	*elaborado por: Efrain Alfonso Gomez Castaño ADSI-2015
	* este archivo se encarga se encarga de eredar las funciones del archivo DB.php
	*/

	//incluimos el archivo bd.php donde se encuentran las funciones de conexion y consulta de la base de datos 
	include('BD.php');
	//creamos la clase con el nombre del archivo y eredamos las clase del archivo anteriormente incluido
	class graficos extends BD
	{
		/*
		*creamos una funcion con el nombre de la clase
		*no resive ningun parametro no funcion
		*/
		function graficos()
		{
		}


		/*
		*esta funcion se encarga de traer los datos de la consulta generada en el archivo del index enviada atraves de un parametro y de hay resivida en el archivo BD.php
		@param varchar se encarga de recibir la consulta enviada atraves del index.php
		@Return  Se encarga de retornar los archivos hasta cumplir  con el ciclo while
		*/
		function escribir($cons)
		{
			//se crea una variable con la finalidad de incluir la funcion de retornar tabla creada en el archivo BD.php
			$res = $this->retornar_tabla($cons);
			$b=" ";
				

					while($fila = mysqli_fetch_array($res)) 
					{
						$b .="<tr>";
						for ($i=0; $i < mysqli_num_fields($res); $i++) 
						{ 
							
							$b .="<td class='info'><center>".$fila [$i]."</center></td>";
							
						} 
						$b .="</tr>";
					}
				
			Return $b;
			
			

		}
	}



?>
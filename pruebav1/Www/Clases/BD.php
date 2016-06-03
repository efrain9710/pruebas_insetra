<?php 

	
	/*
	*elaborado por: Efrain Alfonso Gomez Castaño ADSI-2015
	* se crea una clase nueva con el nombre del archivo 
	* se publivan las bariables de la conexion ala base de datos 
	*/
	class BD
	{
		public $servidor;
		public $usuario;
		public $clave;
		public $bd;
		/*
		*creamos una funcion con el nombre de la clase
		*no resive ningun parametro no funcion
		*/
		function BD()
		{
			
		}
		/*
		*creamos una funcion con la finalidad de incluir el archivo con las variables para la conexion al servidor y base de datos 
		*no resive ningun parametro no funcion
		*/
		function ini()
		{
			//se inclulle el archivo con las bariables que permiten la conexion ala base de datos 
			include('config.php');
			//se renombran las variables
			$this->servidor=$servidor;
			$this->usuario=$usuario;
			$this->clave=$clave;
			$this->bd=$bd;
		}
		/*
		*en esta funcion se elaborar la conexion al servidor y ala base de datos 
		*no resive ningun parametro no funcion
		@return retorna la conexion ala base de datos y servidor 
		*/
		function conectar()
		{
				 Return mysqli_connect($this->servidor, $this->usuario, $this->clave, $this->bd);
				
		}
		/*
		*en esta funcion se encarga de recivir la consulta enviada desde el archivo graficos.php y hacer su consulta en la base de datos 
		@param varchar recive la consulta de la base de datos 
		@return retorna la consulta
		*/
		function retornar_tabla($cons)
		{
			
				$con = $this->conectar();
				$resultado = $con->query($cons);
				Return $resultado;
		}

	}



?>
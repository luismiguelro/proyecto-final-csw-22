<?php
class Conexion{
	public function __construct(){} 
	public function __destruct(){} 

	//conexion a BD
	public function conectar(){
		$con=null;
		include_once "config.php";
		try{ 
			$con= new PDO("mysql:host=localhost;dbname=registropersonaloc",USUARIO,CLAVE);

			// TRY CATCH en JAVA
			$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOExeption $ex){
			echo "Error".$ex->getMessage();
		}
		return $con;
	}
}
?>
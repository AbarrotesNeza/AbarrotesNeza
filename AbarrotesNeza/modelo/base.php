<?php
class base{
	public function conectarBD(){
		$con=mysqli_connect("localhost","root","","abarrotes")or die ("Problemas con la conexión a la base de datos");
		return $con;
	}
	public function desconectarBD(){
		mysqli_close($this->conectarBD());
	}
}
?>

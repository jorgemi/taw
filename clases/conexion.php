<?php

 class conexion{
	
	private $bd='mysql:dbname=parte_horas;host=localhost';
	private $user='cisga';
	private $pw='cisga';
	private $con;
	
	function conexion(){
	 try{
		$this->con= new PDO($this->bd,$this->user,$this->pw);
		
		return $this->con;
	 }
	 catch(PDOException $e){
		 echo 'fallo en la conexión'.$e->getMessage();
		 }
		}
		
		
	function consultaBBDD($sql)	{
		$resultado=false;
		$pdo=$this->conexion();
		$prep=$pdo->prepare($sql);
		$prep->execute();
		$result=$prep->fetch(PDO::FETCH_ASSOC);
		if($result != false){
		$resultado=$result;
		}	
			return $resultado;
		}
}

?>
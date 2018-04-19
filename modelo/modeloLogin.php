<?php
require_once('../clases/conexion.php');
 
 
 
 function consultaUser($user,$pwd){
 $con=new conexion();
 $sql="select nombre,password,rol from usuario where password='$pwd' and nif='$user'";
 $usuario=$con->consultaBBDD($sql);
 if($usuario != false){
 
 //print_r($usuario);
	 
 }else{
	 
	 }
   return $usuario;
 }
?>
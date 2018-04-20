<?php 
	//ini_set("session.use_cookie",0);
	//session_cache_limiter("nocache");
	echo 'hola';
	if(isset($_POST['nif']) && !empty($_POST['password'])){
		echo 'hola';
		require_once('../modelo/modeloLogin.php');
		$nif=$_POST['nif'];
		$pwd=$_POST['password'];
		$pwd= md5($pwd);
		$usuario=consultaUser($nif,$pwd);
		print_r ($usuario);
		if($usuario!= false){
			
			//$_SESSION
			//session_start();
			print_r($usuario);
			print_r($_SESSION);
			if ($usuario['rol']==1){

				header("Location: ../vista/user.php");
				
			}
		}
		else{
			header('Location: ../index.php?$logged=false');
			exit;
		}
	}
?>
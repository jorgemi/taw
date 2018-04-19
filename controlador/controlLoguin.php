<?php 
	//ini_set("session.use_cookie",0);
	//session_cache_limiter("nocache");
	if(isset($_POST['user']) && !empty($_POST['user'])){
		require_once('../modelo/modeloLogin.php');
		$user=$_POST['user'];
		$pwd=$_POST['pwd'];
		$pwd= md5($pwd);
		$usuario=consultaUser($user,$pwd);
		if($usuario!= false){
			//$_SESSION
			session_start();
			print_r($usuario);
			print_r($_SESSION);
			}
		
		
		
	
	}
?>
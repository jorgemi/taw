<?php 
      //ini_set("session.use_cookie",0);
	  //session_cache_limiter("nocache");
	
	if(isset($_POST['nif']) && !empty($_POST['password'])){
		//echo 'hola';
		require_once('../modelo/modeloLogin.php');
		$nif=$_POST['nif'];
		$pwd=$_POST['password'];
		$pwd= md5($pwd);
		$usuario=consultaUser($nif,$pwd);
		//print_r ($usuario);
		if($usuario!= false){
			session_start();
			$_SESSION['usuario']=$usuario;
			echo 'hola';
            echo session_name();
			echo session_id();
			if ($usuario['rol']==1){
              
				header("Location: ../vista/usuario.php");
				exit();
				
			}
		}
		else{
			header('Location: ../vista/login.php?$logged=error');
			exit();
		}
	}
?>
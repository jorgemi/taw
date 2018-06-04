<!DOCTYPE html>
<html lang="es">
<head>
	
	<?php
	session_start();
	///echo session_id();
	
	require_once('../funciones/funciones.php');
	add_libraries();
	?>

</head>
<body>
 

 
<div class="container">

	<?php 
	pinta_cabecera();
	?>
	
<div align="center">
<form method="post" action="../controlador/controlLoguin.php"  class="form-horizontal" style="margin:0 auto">
  <div class="form-group" required>
    <label class="col-lg-4 control-label">NIF: </label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="nif" required="required"/>
    </div>
  </div>

  <div class="form-group" required>
    <label class="col-lg-4 control-label">Contraseña: </label>
    <div class="col-lg-4">
      <input type="password" class="form-control" name="password" required="required"/>
    </div>
  </div>


  <div class="form-group">
    <div class="">
      <button type="submit" class="btn btn-default left">Entrar</button>
    </div>
  </div>

</form>
<?php
	if(isset($_GET['$logged'])){
		$logged = $_GET['$logged'];
		if ($logged=='error'){			
		usuario_incorrecto();
		}
		else if ($logged=='exit'){
		session_destroy();
		}
	
}
pinta_pie();
?>
</div>
</body>
</html>



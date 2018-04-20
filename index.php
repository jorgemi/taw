<!DOCTYPE html>
<html lang="es">
<head>
  <title>Taw - CiSGA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-4.1.0/dist/css/bootstrap.min.css">
  <script src="bootstrap-4.1.0/dist/jquery/jquery-3.3.1.js"></script>
  <script src="bootstrap-4.1.0/dist/js/bootstrap.min.js"></script>
</head>
<body>
 

 
<div class="container">

	<?php 
	require_once('funciones/funciones.php');
	pinta_cabecera();
	?>
	
<div align="center">
<form method="post" action="controlador/controlLoguin.php"  class="form-horizontal" style="margin:0 auto">
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
</div>
	

</body>
</html>



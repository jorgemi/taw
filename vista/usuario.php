<!DOCTYPE html>
<?php
session_start();
?>
<html lang="es">
<head>
	
	<?php
	//print_r($usuario);
	//print_r($_SESSION);
	require_once('../funciones/funciones.php');
	add_libraries();
	?>

</head>
<body>
 

 
<div class="container">

	<?php 
	pinta_cabecera();
	user_sesion();
	?>
	
<div align="center">

<?php
	if(isset($_GET['$logged'])){
		$logged = $_GET['$logged'];
		if ($logged=='error'){			
		usuario_incorrecto();
		}
	
}

?>
<table class="table table-bordered table-condensed">
  <thead>
    <tr>
      <th scope="col">Proyecto</th>
      <th scope="col">Trabajo</th>
      <th scope="col">Cliente</th>
      <th scope="col">Localidad</th>
	  <th scope="col">L</th>
	  <th scope="col">M</th>
	  <th scope="col">X</th>
	  <th scope="col">J</th>
	  <th scope="col">V</th>
	  <th scope="col">S</th>
	  <th scope="col">D</th>
    </tr>
  </thead>
  <tbody>
    <tr>
		<td class="excel"> 
		  <select class="form-control excel" id="sel1">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		  </select>
		</td>
      <td class="excel">
		  <select class="form-control excel" id="sel1">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		  </select>
	  </td>
      <td class="excel">
	  	<select class="form-control excel" id="sel1">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		 </select>
	  </td>
      <td class="excel">
	  	  <select class="form-control excel" id="sel1">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		 </select>
	  </td>
	  <td class="excel">
		<input type="text" class="excel form-control" id="lunes" name="lunes">
	  </td>
	  <td class="excel">
		<input type="text" class="form-control excel" id="lunes" name="lunes">
	  </td>
	  <td class="excel">
		<input type="text" class="form-control excel" id="lunes" name="lunes">
	  </td>
	  <td class="excel">
		<input type="text" class="form-control excel" id="lunes" name="lunes">
	  </td>
	  <td class="excel">
		<input type="text" class="form-control excel" id="lunes" name="lunes">
	  </td>
	  <td class="excel">
		<input type="text" class="form-control excel" id="lunes" name="lunes">
	  </td>
	  <td class="excel">
		<input type="text" class="form-control excel" id="lunes" name="lunes">
	  </td>
    </tr>
	

  </tbody>
</table>

</div>
<form method="get" action="">
   <button type="submit">+</button>
</form>

<form method="get" action="">
   <button type="submit">-</button>
</form>

<form method="get" action="../controlador/excelnormal.php">
   <button type="submit">Generar Excel Normal</button>
</form>
<?php
pinta_pie();
?>
</body>
</html>



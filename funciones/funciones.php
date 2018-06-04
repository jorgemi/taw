<?php
//TÍTULO Y LIBRERÍAS CSS Y JAVASCRIPT
function add_libraries()
{
	echo '<title>Taw - CiSGA</title>';
  echo '<meta charset="utf-8">';
  echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
  echo '<link rel="stylesheet" href="../librerias/bootstrap-4.1.0/dist/css/bootstrap.min.css">';
  echo '<link rel="stylesheet" href="../css/estilo.css">';
  echo '<script src="../librerias/bootstrap-4.1.0/dist/jquery/jquery-3.3.1.js"></script>';
  echo '<script src="../librerias/bootstrap-4.1.0/dist/js/bootstrap.min.js"></script>';
}
//CABECERA
function pinta_cabecera()
{
echo '<div style="background:#006099 !important" class="jumbotron">';
echo '<h1 class="text-white"><a style="text-decoration:none" href="../index.php">TiME At Work</a><a target="_blank" href="https://www.cisga.es/"><img align="right" src="../images/logo_cisga.png" alt="cisga logo"></a></h1>';
echo '</div>';
}

//FOOTER
function pinta_pie()
{
	echo '<footer class="fixed-bottom small" align="center">jorgemi@gmail.com ® Reservados todos los derechos.</footer>';
}

//USUARIO INCORRECTO
function usuario_incorrecto(){
echo '<br><br><br><br>';
echo '<div  class="alert alert-danger col-lg-4">Usuario o contraseña incorrecto.</div>';
}

//MUESTRA USUARIO Y CERRAR SESIÓN
function user_sesion(){
$nif = $_SESSION['usuario']['nif'];

echo '<p align="right">';
echo $nif;
echo '<a href="../vista/login.php?$logged=exit"> (Salir)</a>';
echo'</p>';

}

//Devuelve el array con día inicial y día final de la semana
 function getrangeWeek ($datestr) {
   date_default_timezone_set (date_default_timezone_get());
   $dt = strtotime ($datestr);

   $initdate = date ('N', $dt) == 1 ? date ('d/m/Y', $dt) : date ('d/m/Y', strtotime ('last monday', $dt));
   $finishdate = date('N', $dt) == 7 ? date ('d/m/Y', $dt) : date ('d/m/Y', strtotime ('next sunday', $dt));

   return array (
     "inicio" => $initdate,
     "fin" => $finishdate
   );
 }
 
 //Devuelve el número de semana del año que es
 function getnWeekInYear($date) {
    return (date("W", strtotime($date)));
}

//Transforma de string a date
function toDate($string){
	return DateTime::createFromFormat('d/m/Y',$string);
}

?>
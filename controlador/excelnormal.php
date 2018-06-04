<?php
//include the file that loads the PhpSpreadsheet classes
require '../librerias/spreadsheet/vendor/autoload.php';
require_once('../funciones/funciones.php');

$hoy = getdate();
$currentdate = date("Y/m/d");
$rango = getrangeWeek(intval($currentdate));
$numberweek = getnWeekInYear(intval($currentdate));

//Cargamos el fichero
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('../templates/normal.xls');
//Nos situamos en la primera hoja
$spreadsheet->setActiveSheetIndex(0);
$worksheet = $spreadsheet->getSheet(0);

print_r ($rango);

//Escribir en el fichero
$worksheet->getCell('C4')->setValue('Emilio José García Casas');
$worksheet->getCell('L4')->setValue($rango['inicio']);
$worksheet->getCell('N4')->setValue($rango['fin']);
$worksheet->getCell('P4')->setValue($hoy['year']);

//$worksheet->getCell('C8')->setValue('NO');

$worksheet->getCell('C6')->setValue('Valladolid');
$worksheet->getCell('K6')->setValue($hoy['mon']);
$worksheet->getCell('O6')->setValue($numberweek);

$worksheet->getCell('I11')->setValue('8');
$worksheet->getCell('J11')->setValue('8');
$worksheet->getCell('K11')->setValue('8');
$worksheet->getCell('L11')->setValue('8');
$worksheet->getCell('M11')->setValue('8');

//$worksheet->getCell('P11')->setValue('40');

//Guardamos el fichero en disco
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
$writer->save("../templates/Parte_Emilio_Garcia_".$hoy['year']."_semana_".$numberweek.".xls");



?>
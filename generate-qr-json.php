<?php 
$datos = json_decode(file_get_contents("php://input"));
// Aquí podemos procesar los datos
$data = $datos->data;
$ecc = $datos->ecc;
$size = $datos->size;
//generamos qr  añadiendo información de archivo (y directorio)
 include('./phpqrcode/qrlib.php'); 
$codesDir = "codes/";   
$codeFile = date('d-m-Y-h-i-s').'.png';
QRcode::png($data, $codesDir.$codeFile, $ecc, $size); 
// añadimos a data el nombre del archivo + directorio para la respuesta json
$nombre_archivo = $codesDir.$codeFile;
$datos->archivo= $codesDir.$codeFile;

$respuesta= json_encode($datos); 
// Si queremos grabarlos en un archivo- ¡¡¡podría ser una base de datos!!!!
file_put_contents("datos.json", $respuesta);
// respondemos a nuestra applicación 
//header('Content-type: application/json');
echo $respuesta;
?>
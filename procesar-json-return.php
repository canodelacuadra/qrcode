<?php
$datos = json_decode(file_get_contents("php://input"));
// Aquí podemos procesar los datos
$data = $datos->data;
$ecc = $datos->ecc;
$size = $datos->size;
// Aquí empaquetamos
$respuesta= json_encode($datos); 
// realizamos acciones 
file_put_contents("datos.json", $respuesta, FILE_APPEND);
// respondemos
echo $respuesta;
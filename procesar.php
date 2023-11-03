<?php
$datos = json_decode(file_get_contents("php://input"));
// Aquí podemos procesar los datos
$data = $datos->data;
$ecc = $datos->ecc;
$size = $datos->size;

file_put_contents("datos.txt", "Data: $data, ECC: $ecc, Size: $size\n", FILE_APPEND);
$respuesta="{Data: $data, ECC: $ecc, Size: $size}"; 
 
echo json_encode($respuesta);
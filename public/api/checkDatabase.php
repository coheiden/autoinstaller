<?php
include_once "../autoload.php";
$check = new chekDatabase;

$data = json_decode(file_get_contents('php://input')); // recibe los datos de post
if(!isset($data)) {                         // comprueba si no hay datos
    echo json_encode(["mensaje" => null]); // si no hay post devuelve null
    exit;
}

//$check->chekDatabase($data);

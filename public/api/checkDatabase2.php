<?php
include_once "../autoload.php";


$data = json_decode(file_get_contents('php://input')); // recibe los datos de post
if(!isset($data)) {                         // comprueba si no hay datos
    echo json_encode(["mensaje" => null]); // si no hay post devuelve null
    exit;
}
$check = new checkDatabase2;
if ($check->checkDb($data)) { // si comprobarDatosPost
    echo json_encode(["mensaje" => "1"]); // es true respuesta json de "1"
} else {
    echo json_encode(["mensaje" => "0"]); // si es false respuesta json de "0"
}

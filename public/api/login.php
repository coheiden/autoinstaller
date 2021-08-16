<?php
if ( file_exists( "../config.php" ) ) {

	require_once "../config.php";

} else {
    echo json_encode(["mensaje" => "ERROR NO EXISTE FICHERO CONFIGURACION NECESARIO INSTALAR"]);
    exit;
}


include_once "../autoload.php";
$admin = new administrador;

$data = json_decode(file_get_contents('php://input')); // recibe los datos de post
if(!isset($data)) {                         // comprueba si no hay datos
    echo json_encode(["mensaje" => null]); // si no hay post devuelve null
    exit;
}
//print_r($data);

    if ($admin->checkLogin($data)) { // si comprobarDatosPost
        echo json_encode(["mensaje" => "1"]); // es true respuesta json de "1"
    } else {
        echo json_encode(["mensaje" => "0"]); // si es false respuesta json de "0"
    }
<?php
if ( file_exists( "../config.php" ) ) {

	require_once "../config.php";

} else {
    echo json_encode(["mensaje" => "ERROR NO EXISTE FICHERO CONFIGURACION NECESARIO INSTALAR"]);
    exit;
}


include_once "../autoload.php";
$admin = new administrador;
/* 
// para probar combiar $_POST por $parametros
$parametros = array(
"user"=>"admin",
"password"=>"admin",
);
 */

if (count($_POST) > 0) {
    if ($admin->comprobarDatosPost($_POST)) { // si comprobarDatosPost
        echo json_encode(["mensaje" => "1"]); // es true respuesta json de "1"
    } else {
        echo json_encode(["mensaje" => "0"]); // si es false respuesta json de "0"
    }
    ;

} else {
    echo json_encode(["mensaje" => null]); // si no hay post devuelve null
}
;
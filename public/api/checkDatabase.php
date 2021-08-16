<?php
include_once "../autoload.php";
$check = new chekDatabase;

// para probar combiar $_POST por $parametros
$parametros = array(
"user"=>"admin",
"password"=>"admin",
);

$check->chekDatabase($_POST);

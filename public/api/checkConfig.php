<?php
if ( file_exists( "../config.php" ) ) {

	echo json_encode(["mensaje" => "1"]);

} else {
    echo json_encode(["mensaje" => "0"]);
    exit;
}
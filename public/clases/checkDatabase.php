<?php

class checkDatabase
{
    // Funcion que que compueba base de datos
    function checkDb($data)
    {
        error_reporting(0); // no muestra los mensajes de error
        $servername = $data->servername;
        $username = $data->user;
        $password = $data->password;
        $database = $data->database;
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password);
        
        // Check connection
        if (!$conn) {
          //die("Connection failed: " . mysqli_connect_error());
          return false;
        }
        //echo "Connected successfully";
        $conn -> close();
        return true;
    }

}

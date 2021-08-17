<?php

class checkDatabase2
{
    // Funcion que que compueba base de datos
    function checkDb($data)
    {
        //error_reporting(0); // no muestra los mensajes de error con PDO no hace falta
        $servername = $data->servername;
        $username = $data->user;
        $password = $data->password;
        $databaseName = $data->database;
        // Create connection
        try{
          $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $databaseName, $username, $password);
          $conn->exec("set names utf8");
      }catch(PDOException $exception){
         //echo "Database could not be connected: " . $exception->getMessage();
         return false;
        }
        
        // Check connection
        if ($conn) {
          //echo "Connected successfully";
          $conn = null; // close connection
          return true;
        }

    }

}

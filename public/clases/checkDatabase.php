<?php

class checkDatabase
{
    // Funcion que que compueba base de datos
    function checkDb($servername,$username,$password)
    {
        $servername = "localhost";
        $username = "username";
        $password = "password";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password);
        
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
    }

}

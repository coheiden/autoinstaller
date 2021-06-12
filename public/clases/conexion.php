<?php
abstract class conexion
{
    private $servername;
    private $username;
    private $password;
    private $db;
    
    public function __construct()
    {
        $this->servername = DB_HOST;
        $this->username = DB_USER;
        $this->password = DB_PASSWORD;
        $this->db = DB_NAME; 

    }

    public function connect()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->db);
        return $conn;
    }
}

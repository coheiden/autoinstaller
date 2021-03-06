<?php

class administrador extends conexion
{

    // Funcion que retorna la informacion del usuario que esta seleccionado mediante SQL
    public function obtenerInfo($usuario)
    {

        $sql = 'SELECT * from administrador where nombre_usuario = "' . $usuario . '"';
        //echo $sql;
        $result = $this->connect()->query($sql);
        if ($result) {
            $infoUser = $result->fetch_assoc();
            return $infoUser;
        };

    }

    // Funcion imprescindible que comprueba los datos de POST y comprueba la PASSWORD y genera las variables de SESSION

    public function checkLogin($data)
    {
        $user = $data->user;
        $password = $data->password;

        $infoUser = $this->obtenerInfo($user);

        if (!$infoUser) { // si el usuario no existe
            return false;
        }

        if (password_verify($password, $infoUser["contraseña"])) {

            session_start();
            $_SESSION["user_id"] = $infoUser["id"];
            $_SESSION["user_name"] = $infoUser["nombre_usuario"];
            return true;

        } else {
            return false;
        }

    }
}

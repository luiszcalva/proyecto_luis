<?php
require_once ("conexion.php");
class ModeloUsuarios{
    public static function mdlEntrar($username, $password){
        $stm = conexion::conectar()->prepare("SELECT usuario, password FROM usuarios WHERE usuario=:user AND password=:pass");
        $stm->bindParam(':user', $username, PDO::PARAM_STR);
        $stm->bindParam(':pass', $password, PDO::PARAM_STR);
        $stm->execute();
        return $stm->fetch();

    }
}
<?php include_once "config.php";

class CrudEntry extends Connection
{
    static function _registrerData($datos)
    {
        $sql = "INSERT INTO tbl_persons (per_names,per_dni,per_email,per_pass,per_status) VALUES(:names,:dni,:email,:pass,:status)";
        $query = Connection::_connect()->prepare($sql);
        $query->bindParam(":names", $datos['names'], PDO::PARAM_STR);
        $query->bindParam(":dni", $datos['dni'], PDO::PARAM_STR);
        $query->bindParam(":email", $datos['email'], PDO::PARAM_STR);
        $query->bindParam(":pass", $datos['pass'], PDO::PARAM_STR);
        $query->bindParam(":status", $datos['status'], PDO::PARAM_STR_CHAR);
        return $query->execute();
    }

    static function _startData($datos)
    {
        $sql = "SELECT * FROM tbl_persons WHERE per_email=:email AND per_pass=:pass";
        $query = Connection::_connect()->prepare($sql);
        $query->bindParam(":email", $datos['email'], PDO::PARAM_STR);
        $query->bindParam(":pass", $datos['pass'], PDO::PARAM_STR);
        $query->execute();
        return $query->fetch();
    }
    static function _sessionUser($user){
        $sql = "SELECT * FROM tbl_persons WHERE per_email=:email";
        $query = Connection::_connect()->prepare($sql);
        $query->bindParam(":email", $user, PDO::PARAM_STR);
        $query->execute();
        return $query->fetchAll();
    }
}

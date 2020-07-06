<?php
class Connection
{
    static function _connect()
    {
        try {
            $connection = new PDO("mysql:host=localhost;dbname=_productos", "root", "");
            //echo "conectado";
            return $connection;
        } catch (\Throwable $th) {
            die("Fallo de connection" . $th->getMessage());
        }
    }
}

//Connection::_connect();

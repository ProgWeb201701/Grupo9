<?php

final class DBConnection
{

    static $connection;   

    public static function open()
    {
        $hostDB = "localhost";
        $usuarioDB = "root";
        $senhaDB = "";
        $nomeDB = "trabtcc";
        $connection = new mysqli($hostDB, $usuarioDB, $senhaDB, $nomeDB);

      if ($connection->connect_error) {
            die("Erro na conexão com o banco de dados: " . $connection->connect_error);
        } else {
            return $connection;
        }
    }

}
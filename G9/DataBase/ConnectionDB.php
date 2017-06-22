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

        return $connection;
    }

}
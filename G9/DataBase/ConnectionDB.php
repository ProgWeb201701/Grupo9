<?php

final class DBConnection
{

    static $connection;   

    public static function open()
    {
        $hostDB = "localhost";
        $usuarioDB = "root";
        $senhaDB = "teste";
        $nomeDB = "rp3";
        $connection = new mysqli($hostDB, $usuarioDB, $senhaDB, $nomeDB);

        return $connection;
    }

}
<?php

class Connection {

    public static function connect() {
        $connection = new PDO('mysql:dbname=intelcost_bienes;host=localhost', 'root', '');
        $connection->exec('set names utf8');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $connection;
    }

}
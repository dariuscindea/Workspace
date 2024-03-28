<?php

class Connection
{
    public function init()
    {
        try {
            $host = '127.0.0.1';
            $database = 'workspace';
            $username = 'root';
            $port = 3306;
            $password = 'root';

            return mysqli_connect($host, $username, $password, $database, $port);

        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
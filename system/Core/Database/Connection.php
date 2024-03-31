<?php

class Connection
{
    public function init()
    {
        try {
            $databaseConfig = include __DIR__ . '/../../../config/database.php';

            $config = $databaseConfig['connections']['mysql'];

            return mysqli_connect($config['host'], $config['username'], $config['password'], $config['database'], $config['port']);

        } catch (Exception $e) {
            die('Something went wrong! : ' . $e->getMessage());
        }
    }
}
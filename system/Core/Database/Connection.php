<?php

class Connection
{
    public function init()
    {
        try {
            $config = config('database.connections.mysql');

            return mysqli_connect($config['host'], $config['username'], $config['password'], $config['database'], $config['port']);

        } catch (Exception $e) {
            die('Something went wrong! : ' . $e->getMessage());
        }
    }
}
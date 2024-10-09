<?php

// use MongoDB\Operation\Explain;

require __DIR__ . '/../../vendor/autoload.php';

class Database
{
    public static function getconnection()
    {
        try {
            // new  MongoDB\Driver\Manager("mongodb://localhost:27017");
            $client = new MongoDB\Client("mongodb://localhost:27017");
            if ($client) {
                return $client;
            }else{
                throw new Exception("No Connect!");
            }
        } catch (Exception $e) {
            throw new Exception("Unable connect to Database!");
        }
    }
}

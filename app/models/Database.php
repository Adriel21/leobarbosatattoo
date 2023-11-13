<?php

namespace App\models;

use PDO, Exception;



abstract class Database {

    private static string $servidor = "localhost";

    private static string $user = "root";

    private static string $password = "";

    private static string $database = "leotattoo";

    private static PDO $connection;




    public static function connect():PDO {

        try {

            self::$connection = new PDO(

                "mysql:host=".self::$servidor."; 

                dbname=".self::$database.";

                charset=utf8",

                self::$user, 

                self::$password

            );

            self::$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



            // echo "Ok!"; // teste

        } catch (Exception $erro) {

            die("Deu ruim: ".$erro->getMessage());

        }

        return self::$connection;

    }

}

Database::connect(); // teste
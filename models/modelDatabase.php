<?php

class Database
{
    //Initialisation du PDO et récupération de la config
    function initializePdo()
    {

        try {
            require '../config.php';

            $pdo = new PDO(
                "mysql:dbname=$dbname;host=$host;charset=utf8", $user, $password
            );
        } catch (PDOException $e) {
            echo 'erreur : ' . $e->getMessage();
            $pdo = null;
        }
        return $pdo;
    }

    //Préparation de la requête SQL
    function prepareStatement($sql)
    {

        $pdo_statement = null;
        $pdo = self::initializePdo();

        if ($pdo) {
            try {
                $pdo_statement = $pdo->prepare($sql);
            } catch (PDOException $e) {
                echo 'erreur : ' . $e->getMessage();
            }
        }
        return $pdo_statement;
    }
}

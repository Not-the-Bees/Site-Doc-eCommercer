<?php

/**
 * Class Database
 * Permet de se connecter à la base de données et d'y envoyer des requêtes
 */
class Database
{

    /**
     * function initializePdo()
     * Connexion à la base de données (+récupération de la config)
     */
    public function initializePdo()
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


    /**
     * function prepareStatement($sql)
     * Préparation de la requête SQL
     */
    public function prepareStatement($sql)
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

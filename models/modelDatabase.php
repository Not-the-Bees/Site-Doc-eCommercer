<?php

/**
 * Class Database
 * Permet de se connecter à la base de données et d'y envoyer des requêtes
 */
class Database
{

    /**
     * Initialize a new instance of PDO
     * @return null|PDO
     */
    static function initializePdo(): ?PDO
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
     * Initialize a new pdostatement with a Structured Query Language (SQL) string
     * @param $sql
     * @return null|PDOStatement
     */
    static function prepareStatement($sql): ?PDO
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

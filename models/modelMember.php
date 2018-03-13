<?php

/**
 * Class Member
 * Permet de gérer l'authentification des membres, l'enregistrement des nouveaux membres et la suppression d'un compte utilisateur
 */
class Member
{

    /**
     * function connect($login, $password)
     * Permet la connexion (authentification) des membres déjà enregistrés
     */
    public function connect($login, $password)
    {

        $pdo_statement = Database::prepareStatement('SELECT * FROM user WHERE login=:login AND password=:password');
        $pdo_statement->execute(array('login' => $login,
            'password' => $password));

        $result = $pdo_statement->fetch();

        return $result;
    }

    /**
     * function create($login, $password, $mail)
     * Permet de créer un nouveau membre
     */
    public function create($login, $password, $mail)
    {

        $pdo_statement = Database::prepareStatement('INSERT INTO user (login, password, mail, reputation) VALUES (:login, :password, :mail, 0)');

        if (
            $pdo_statement &&
            $pdo_statement->bindParam(':login', $login) &&
            $pdo_statement->bindParam(':password', $password) &&
            $pdo_statement->bindParam(':mail', $mail) &&
            $pdo_statement->execute()
        ) {
            return $pdo_statement;
        }
    }

    /**
     * Permet la suppression d'un compte utilisateur (membre)
     */
    public function delete($id)
    {

        $pdo_statement = Database::prepareStatement('DELETE FROM user WHERE id=:id');

        if (
            $pdo_statement &&
            $pdo_statement->bindParam(':id', $id, PDO::PARAM_INT) &&
            $pdo_statement->execute()
        ) {
            return $pdo_statement;
        }
    }

}
<?php

/**
 * Class Member
 * Permet de gérer l'authentification des membres, l'enregistrement des nouveaux membres et la suppression d'un compte utilisateur
 */
class Member
{


    /**
     * Connect to site with login and password
     * @param $login
     * @return mixed
     */
    static function connect($login)
    {

        $pdo_statement = Database::prepareStatement('SELECT * FROM user WHERE login=:login');
        $pdo_statement->execute(array('login' => $login));

        $result = $pdo_statement->fetch();

        return $result;
    }

    /**
     * Create new member/user account
     * @param $login
     * @param $password
     * @param $mail
     * @return null|PDO|PDOStatement
     */
    static function create($login, $password, $mail)
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
     * Delete member account
     * @param $id
     * @return null|PDO|PDOStatement
     */
    static function delete($id)
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
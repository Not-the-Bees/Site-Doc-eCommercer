<?php

/**
 * Class Member
 * Permet de gérer l'authentification des membres, l'enregistrement de nouveaux membres et la suppression d'un compte utilisateur
 */
class Member
{
    /**
     * @param $id
     * @return mixed
     */
    static function find($id)
    {
        $pdoStatement = Database::prepareStatement('SELECT * FROM user WHERE id=:id');
        $pdoStatement->execute(array('id' => $id));

        $result = $pdoStatement->fetch();

        return $result;

    }

    /**
     * Connect specific user (already register) to the website
     * @param $login
     * @return mixed
     */
    static function connect($login)
    {

        $pdoStatement = Database::prepareStatement('SELECT * FROM user WHERE login=:login');
        $pdoStatement->execute(array('login' => $login));

        $result = $pdoStatement->fetch();

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

        $pdoStatement = Database::prepareStatement('INSERT INTO user (login, password, mail, reputation) VALUES (:login, :password, :mail, 0)');

        if (
            $pdoStatement &&
            $pdoStatement->bindParam(':login', $login) &&
            $pdoStatement->bindParam(':password', $password) &&
            $pdoStatement->bindParam(':mail', $mail) &&
            $pdoStatement->execute()
        ) {
            return $pdoStatement;
        }
    }

    /**
     * Delete member account (WIP
     * @param $id
     * @return null|PDO|PDOStatement
     */
    static function delete($id)
    {

        //@todo Version 2 : Only Admins can do this (WIP)
        $pdoStatement = Database::prepareStatement('DELETE FROM user WHERE id=:id');

        if (
            $pdoStatement &&
            $pdoStatement->bindParam(':id', $id, PDO::PARAM_INT) &&
            $pdoStatement->execute()
        ) {
            return $pdoStatement;
        }
    }

}
<?php

class Member {

    //Connexion
    function connect($login, $password)
    {

        $pdo_statement = Database::prepareStatement('SELECT * FROM user WHERE login=:login AND password=:password');
        $pdo_statement->execute(array('login' => $login,
            'password' => $password));

        $result = $pdo_statement->fetch();

        return $result;
    }

    //Création d'un nouveau membre
    function create($login, $username, $password, $mail)
    {

        $pdo_statement = Database::prepareStatement('INSERT INTO user (login, username, password, mail, reputation) VALUES (:login, :username, :password, :mail, 0)');

        if (
            $pdo_statement &&
            $pdo_statement->bindParam(':login', $login) &&
            $pdo_statement->bindParam(':password', $password) &&
            $pdo_statement->bindParam(':mail', $mail) &&
            $pdo_statement->bindParam(':username', $username) &&
            $pdo_statement->execute()
        ) {
            return $pdo_statement;
        }
    }

    //Suppression d'un membre
    function delete($id)
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
<?php

class Member {

    //Connexion
    function connect($login, $password) {

        $pdo_statement = prepareStatement('SELECT * FROM user WHERE login=:login AND password=:password');
        $pdo_statement->execute(array('login' => $login,
            'password' => $password));

        $result = $pdo_statement->fetch();

        return $result;
    }

    //Création d'un nouveau membre
    function create($login, $username, $password, $mail, $reputation) {

        $pdo_statement = prepareStatement('INSERT INTO user (login, username, password, mail, reputation) VALUES (:login, :username, :password, :mail, :reputation)');

        if (
            $pdo_statement &&
            $pdo_statement->bindParam(':login', $login) &&
            $pdo_statement->bindParam(':password', $password) &&
            $pdo_statement->bindParam(':mail', $mail) &&
            $pdo_statement->bindParam(':username', $username) &&
            $pdo_statement->bindParam(':reputation', $reputation) &&
            $pdo_statement->execute()
        ) {
            return $pdo_statement;
        }
    }

    //Suppression d'un membre
    function delete($userid) {

        $pdo_statement = prepareStatement('DELETE FROM user WHERE userid=:userid');

        if (
            $pdo_statement &&
            $pdo_statement->bindParam(':userid', $userid, PDO::PARAM_INT) &&
            $pdo_statement->execute()
        ) {
            return $pdo_statement;
        }
    }

}
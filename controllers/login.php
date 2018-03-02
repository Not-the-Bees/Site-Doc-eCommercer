<?php

require '../models/modelDatabase.php';
require '../models/modelMember.php';


// Login
if (isset($_POST['connect'])) {

    if (isset($_POST['login'], $_POST['password'])) {
        $login_entered = htmlspecialchars($_POST['login']);
        $password_entered = htmlspecialchars($_POST['password']);
        $user = Member::connect($login_entered, $password_entered);


        if ($user) {

            session_start ();

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['login'];
            $_SESSION['pwd'] = $user['password'];

            header ('location: ../resources/views/valide.php');

        } else {
            $error = "Membre non reconnu - Veuillez entrer un Login ou un Mot de Passe valide";
        }

    }
}


// Register
if (isset($_POST['register'])) {

    if (isset($_POST['login'], $_POST['pwd'], $_POST['email'], $_POST['confirm_pwd'])) {
        $login_register = htmlspecialchars($_POST['login']);
        $password_register = htmlspecialchars($_POST['pwd']);
        $email_register = htmlspecialchars($_POST['email']);
        $password_confirmation = htmlspecialchars($_POST['confirm_pwd']);

        if ($password_register === $password_confirmation) {
            $newUser = Member::create($login_register, $password_register, $email_register);

            if ($newUser) {
                header('location: /TalkAboutStuff/resources/views/valide.php');
            }
        } else {
            header('location: /TalkAboutStuff/resources/views/index.php');
        }
    } else {
        echo "Veuillez entrer deux mots de passe identiques";
    }
}

require '../resources/views/index.php';
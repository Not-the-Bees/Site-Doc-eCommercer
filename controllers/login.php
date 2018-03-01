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

            header ('location: browse.php');

        } else {
            $error = "Membre non reconnu - Veuillez entrer un Login ou un Mot de Passe valide";
        }

    } else {
        echo 'Veuillez entrer un nom d\'utilisateur et un mot de passe.';
    }
}


// Register
if (isset($_POST['register'])) {

    if (isset($_POST['login'], $_POST['username'],$_POST['pwd'], $_POST['email'], $_POST['confirm_pwd'])) {
        $login_register = htmlspecialchars($_POST['login']);
        $password_register = htmlspecialchars($_POST['pwd']);
        $email_register = htmlspecialchars($_POST['email']);
        $password_confirmation = htmlspecialchars($_POST['confirm_pwd']);
        $username_register = htmlspecialchars($POST['username']);

        if ($password_register === $password_confirmation) {
            $newUser = Member::create($login_register, $password_register, $email_register, $username_register);

            if ($newUser) {
                header('location: /TalkAboutStuff/resources/views/valide.php');
            }
        } else {
            header('location: /TalkAboutStuff/resources/views/index.php');
        }
    } else {
        echo "Veuillez entrer un login/password/email valide";
    }
}

require '../resources/views/index.php';
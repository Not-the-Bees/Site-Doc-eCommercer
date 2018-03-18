<?php

require_once '../inc/bootstrap.php';

/**
 * Login
 */

if (isset($_POST['connect'])) {

    if (isset($_POST['login'], $_POST['password']))
    {
        $login_entered = htmlspecialchars($_POST['login']);
        $password_entered = htmlspecialchars($_POST['password']);
        $user = Member::connect($login_entered);


        if ($user && password_verify($password_entered, $user['password']))
        {

            session_start ();

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['login'];
            $_SESSION['pwd'] = $user['password'];

            header ('location: ../resources/views/valide.php?username=' . $user['login']);

        } else {

            $error = "Membre non reconnu - Veuillez entrer un Login ou un Mot de Passe valide";

        }

    }
}


/**
 * Register
 */
if (isset($_POST['register']))
{

    if (isset($_POST['login'], $_POST['pwd'], $_POST['email'], $_POST['confirm_pwd']))
    {
        $login_register = htmlspecialchars($_POST['login']);
        $password_register = $_POST['pwd'];
        $email_register = htmlspecialchars($_POST['email']);
        $password_confirmation = $_POST['confirm_pwd'];

        if ($password_register === $password_confirmation)
        {
            $encrypted_password = password_hash($password_register, PASSWORD_BCRYPT);
            $newUser = Member::create($login_register, $encrypted_password, $email_register);

            if ($newUser)
            {
                $success = "Registration Complete - Welcome to Talk About Stuff";

            }
        } else {
            $errorPwd = "Veuillez entrer deux mots de passe identiques";
        }

    }



}

require '../resources/views/login.php';
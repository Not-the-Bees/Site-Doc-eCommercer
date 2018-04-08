<?php
session_start();

require_once '../inc/bootstrap.php';

if (isset($_GET['id']))
{
    $id = $_GET['id'];

    if (Answer::delete($id))
    {
        header('Location: ../controllers/browseQuestion.php');

    } else {
        $errorDelete = "Sorry ;'( We can't delete this question. Try later !";
    }
}

require_once '../resources/views/deleteQuestion.php';
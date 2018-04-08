<?php
session_start();

require_once '../inc/bootstrap.php';

if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $answer = Answer::displayOne($id);

    if (isset($_POST['content']))
    {
        $content = $_POST['content'];

        if (Answer::edit($content, $id))
        {
            header('Location: ../controllers/browseQuestion.php');
        } else {
            $errorEdit = "Sorry, we can't update your answer.. Try again :-)";
        }
    }
}

require '../resources/views/editAnswer.php';
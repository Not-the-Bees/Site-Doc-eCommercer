<?php
session_start();

require_once '../inc/bootstrap.php';

if (isset($_GET['id']))
{

    $id = $_GET['id'];
    $question = Question::read($id);

    if (isset($_POST['title'], $_POST['content']))
    {

        $title = $_POST['title'];
        $content = $_POST['content'];


        if (Question::edit($title, $content, $id))
        {
            header('Location: ../controllers/browseQuestion.php');
        } else {
            $errorEdit = "Sorry, we can't update your question.. Try again :-)";
        }
    }
}


require '../resources/views/editQuestion.php';
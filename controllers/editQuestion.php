<?php
session_start();

require_once '../inc/bootstrap.php';

if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $question = Question::read($id);

    if ($_SESSION['id'] === $question['user_id'])
    {
        if (isset($_POST['editQuestion']))
        {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $user_id = $_SESSION['id'];

            if (Question::edit($title, $content, $user_id))
            {
                header('Location: ../controllers/readQuestion.php?id=' . $user_id);
            } else {
                $errorEdit = "Sorry, we can't update your question.. Try again :-)";
            }
        }
    }

} else {
    $errorEdit = "You can't edit this question, this is not yours :'(";
}

require '../resources/views/editQuestion.php';
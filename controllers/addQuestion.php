<?php
session_start();

require_once '../inc/bootstrap.php';

if (isset($_POST['postQuestion']))
{

    $questionTitle = $_POST['title'];
    $questionContent = $_POST['content'];
    $userId = $_SESSION['id'];
    $newQuestion = Question::add($questionTitle, $questionContent, $userId);

    if ($newQuestion)
    {

        header('location: ../controllers/browseQuestion.php');

    }
}

require '../resources/views/addQuestion.php';
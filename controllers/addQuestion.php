<?php
session_start();

/*require '../models/modelDatabase.php';
require '../models/modelMember.php';
require '../models/modelQuestion.php';*/
require_once '../inc/bootstrap.php';

if (isset($_POST['postQuestion']))
{

    $questionTitle = htmlspecialchars($_POST['title']);
    $questionContent = htmlspecialchars($_POST['content']);
    $userId = $_SESSION['id'];
    $newQuestion = Question::add($questionTitle, $questionContent, $userId);


    if ($newQuestion) {


        header('Location: ../resources/views/browseQuestion.php');
        exit;
    }
}

require '../resources/views/addQuestion.php';
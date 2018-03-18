<?php
session_start();

/*require '../models/modelDatabase.php';
require '../models/modelMember.php';
require '../models/modelQuestion.php';*/
require_once '../inc/bootstrap.php';

if (isset($_POST['postQuestion']))
{

    $questionTitle = htmlspecialchars($_POST['questionTitle']);
    $questionContent = htmlspecialchars($_POST['questionContent']);
    $userId = $_SESSION['id'];
    $newQuestion = Question::add($questionTitle, $questionContent, $userId);


    if ($newQuestion) {


        header('Location: ../controllers/browseQuestion.php');
        exit;
    }
}

require '../resources/views/addQuestion.php';
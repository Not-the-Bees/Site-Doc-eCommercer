<?php
session_start();

require '../models/modelDatabase.php';
require '../models/modelMember.php';
require '../models/modelQuestion.php';


$newQuestion = Question::add($_POST['title'], $_POST['content'], $_SESSION['id']);


if ($newQuestion) {

    $questionTitle = $_POST['title'];
    $questionDescription = $_POST['content'];
    $questionUserId = $_SESSION['id'];


    header('Location: ../resources/views/browseQuestion.php');
    exit;
}

require '../resources/views/addQuestion.php';
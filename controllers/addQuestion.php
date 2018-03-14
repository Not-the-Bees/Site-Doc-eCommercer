<?php

session_start();

require '../models/modelDatabase.php';
require '../models/modelQuestion.php';


$newQuestion = Question::add($_POST['title'], $_POST['description'], $_SESSION['userid']);

if ($newQuestion) {
    header('Location: ../resources/views/browseQuestion.php');
    exit;
}

require '../resources/views/addQuestion.php';
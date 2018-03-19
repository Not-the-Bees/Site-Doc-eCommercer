<?php
session_start();

require_once '../inc/bootstrap.php';

if (isset($_SESSION['login']))
{
    $browseQuestions = Question::browse();

}

require '../resources/views/browseQuestion.php';
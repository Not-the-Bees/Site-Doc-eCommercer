<?php
session_start();

require_once '../inc/bootstrap.php';
require_once '../resources/functions/timeAgo.php';

if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $question = Question::read($id);
    $answersToQuestion = Answer::display($id);
}

require '../resources/views/question.php';
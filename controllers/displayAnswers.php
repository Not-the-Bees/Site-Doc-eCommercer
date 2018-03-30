<?php
session_start();

require_once '../inc/bootstrap.php';
require_once '../resources/functions/timeAgo.php';

if (isset($_GET['question_id']))
{
    $questionId = $_GET['question_id'];
    $answersToQuestion = Answer::display($questionId);

}

require_once '../resources/views/question.php';

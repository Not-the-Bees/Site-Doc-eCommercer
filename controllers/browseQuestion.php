<?php
session_start();

require_once '../inc/bootstrap.php';
require_once '../resources/functions/timeAgo.php';

if (isset($_SESSION['login']))
{
    $questions = Question::browse();
}

require_once '../resources/views/browseQuestion.php';
<?php
session_start();

require_once '../inc/bootstrap.php';

if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $question = Question::read($id);

}

require '../resources/views/readQuestion.php';
<?php
session_start();

require_once '../inc/bootstrap.php';

if (isset($_POST['postAnswer']))
{
    $questionId = $_GET['question_id'];
    $userId = $_SESSION['id'];
    $answerContent = $_POST['answerContent'];
    $newAnswer = Answer::addToQuestion($questionId, $answerContent, $userId);

    if ($newAnswer)
    {
        header('Location: ../controllers/readQuestion.php?id=' . $questionId . '');
    }
}


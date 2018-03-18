<?php

class Answer
{
    //Ajout d'une réponse
    function addAnswer($question_id, $content, $user_id) {

        $pdo_statement = prepareStatement(
            'INSERT INTO answer (question_id, content, user_id) VALUES (:question_id, :content, :user_id)');

        if (
            $pdo_statement &&
            $pdo_statement->bindParam(':question_id', $question_id) &&
            $pdo_statement->bindParam(':content', $content) &&
            $pdo_statement->bindParam(':user_id', $user_id) &&
            $pdo_statement->execute()
        ) {
            return $pdo_statement;
        }
    }
}
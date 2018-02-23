<?php
class Comment
{
    //Ajout d'un commentaire sur une question
    function addQuestionComment($question_id, $content, $user_id)
    {

        $pdo_statement = prepareStatement(
            'INSERT INTO question_comment (question_id, content, user_id) VALUES (:question_id, :content, :user_id)');

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

    //Ajout d'un commentaire sur une réponse
    function addAnswerComment($answer_id, $content, $user_id)
    {

        $pdo_statement = prepareStatement(
            'INSERT INTO answer_comment (answer_id, content, user_id) VALUES (:answer_id, :content, :user_id)');

        if (
            $pdo_statement &&
            $pdo_statement->bindParam(':answer_id', $answer_id) &&
            $pdo_statement->bindParam(':content', $content) &&
            $pdo_statement->bindParam(':user_id', $user_id) &&
            $pdo_statement->execute()
        ) {
            return $pdo_statement;
        }
    }
}
<?php

class Question
{
    //Ajout d'une nouvelle question
    function addQuestion($title, $content, $user_id) {

        $pdo_statement = prepareStatement(
            'INSERT INTO question (title, content, user_id) VALUES (:title, :content, :user_id)');

        if (
            $pdo_statement &&
            $pdo_statement->bindParam(':title', $title) &&
            $pdo_statement->bindParam(':content', $content) &&
            $pdo_statement->bindParam(':user_id', $user_id) &&
            $pdo_statement->execute()
        ) {
            return $pdo_statement;
        }
    }
}
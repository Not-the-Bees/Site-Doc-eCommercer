<?php

class Question
{
    /**
     * Add a new question
     * @param $title
     * @param $content
     * @param $user_id
     * @return mixed
     */
    static function add($title, $content, $user_id)
    {

        $pdo_statement = Database::prepareStatement(
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

    /**
     * Show a specific question
     * @param $id
     * @return mixed|null
     */
    static function read($id)
    {
        $question = null;
        $pdo_statement = Database::prepareStatement('SELECT * FROM question WHERE id = :id');

        if (
            $pdo_statement &&
            $pdo_statement->bindParam(':id', $id, PDO::PARAM_INT) &&
            $pdo_statement->execute()
        ) {
            $question = $pdo_statement->fetch(PDO::FETCH_ASSOC);
        }
        return $question;
    }

    //Modification d'une question si SuperUtilisateur ou Admin
    static function edit()
    {

    }
}
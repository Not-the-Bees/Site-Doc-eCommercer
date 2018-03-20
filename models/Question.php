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


        if ($pdo_statement)
        {
            return $pdo_statement->execute(array(
                ':title'=>$title,
                ':content'=>$content,
                ':user_id'=>$user_id
            ));
        } else {
            return false;
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


    /**
     * Browse last questions
     * @return mixed|null
     */
    static function browse()
    {
        $questions = null;
        $pdo_statement = Database::prepareStatement('SELECT * FROM question');

        if (
            $pdo_statement &&
            $pdo_statement->execute()
        ) {
            $questions = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
        }
        return $questions;
    }

    /**
     * Edit selected question from specific user (version 2 WIP: only SuperUsers can do this)
     * @param $title
     * @param $content
     * @param $user_id
     * @return mixed|null
     */
    static function edit($title, $content, $user_id)
    {
        $editQuestion = null;
        $pdo_statement = Database::prepareStatement('UPDATE todos SET title=:title, content=:content WHERE user_id=:user_id');

        if (
            $pdo_statement &&
            $pdo_statement->bindParam(':user_id', $user_id, PDO::PARAM_INT) &&
            $pdo_statement->bindParam(':title', $title) &&
            $pdo_statement->bindParam(':content', $content) &&
            $pdo_statement->execute()
        ) {
            $editQuestion = $pdo_statement->fetch(PDO::FETCH_ASSOC);
            return $editQuestion;
        }
    }

    static function delete()
    {
        //@todo Create the delete question -> only for Admins & SuperUsers
    }
}
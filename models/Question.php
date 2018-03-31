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

        $pdoStatement = Database::prepareStatement(
            'INSERT INTO question (title, content, user_id) VALUES (:title, :content, :user_id)');


        if ($pdoStatement)
        {
            return $pdoStatement->execute(array(
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
        $pdoStatement = Database::prepareStatement('SELECT * FROM question WHERE id = :id');

        if (
            $pdoStatement &&
            $pdoStatement->bindParam(':id', $id, PDO::PARAM_INT) &&
            $pdoStatement->execute()
        ) {
            $question = $pdoStatement->fetch(PDO::FETCH_ASSOC);
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
        $pdoStatement = Database::prepareStatement('SELECT * FROM question WHERE deleted_at IS NULL');

        if (
            $pdoStatement &&
            $pdoStatement->execute()
        ) {
            $questions = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        }
        return $questions;
    }

    /**
     * Edit selected question from specific user @todo superUsers can do this
     * @param $title
     * @param $content
     * @param $id
     * @return mixed|null
     */
    static function edit($title, $content, $id)
    {
        $editQuestion = null;
        $pdoStatement = Database::prepareStatement('UPDATE question SET title=:title, content=:content WHERE id=:id');

        if (
            $pdoStatement &&
            $pdoStatement->bindParam(':id', $id, PDO::PARAM_INT) &&
            $pdoStatement->bindParam(':title', $title) &&
            $pdoStatement->bindParam(':content', $content) &&
            $pdoStatement->execute()
        ) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Delete selected question. Only from specific user
     * @param $id
     * @return null|PDOStatement
     */
    static function delete($id)
    {
        //@todo Version 2 : Admins + superUSers can do this (WIP)
        $pdoStatement = Database::prepareStatement('UPDATE question SET deleted_at = CURRENT_TIMESTAMP() WHERE id = :id');

        if (
            !$pdoStatement ||
            !$pdoStatement->bindParam('id', $id, PDO::PARAM_INT) ||
            !$pdoStatement->execute()
        ) {
            return $pdoStatement;
        }
    }

    //@todo Create method restoreDeletedQuestion
}
<?php

class Answer
{
    /**
     * Display answers bind to a specific question
     * @param $question_id
     * @return array|null
     */
    static function display($question_id)
    {
        $answersToQuestion = null;
        $pdoStatement = Database::prepareStatement('SELECT * FROM answer WHERE question_id = :question_id AND deleted_at IS NULL ORDER BY created_at DESC');

        if (
            $pdoStatement &&
            $pdoStatement->bindParam(':question_id', $question_id) &&
            $pdoStatement->execute()
        ) {
            $answersToQuestion = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        }
        return $answersToQuestion;
    }

    /**
     * Select one answer
     * @param $id
     * @return mixed|null
     */
    static function displayOne($id)
    {
        $answer = null;
        $pdoStatement = Database::prepareStatement('SELECT * FROM answer WHERE id = :id');

        if (
            $pdoStatement &&
            $pdoStatement->bindParam(':id', $id, PDO::PARAM_INT) &&
            $pdoStatement->execute()
        ) {
            $answer = $pdoStatement->fetch(PDO::FETCH_ASSOC);
        }
        return $answer;
    }
    /**
     * Add a new answer to a specific question
     * @param $question_id
     * @param $content
     * @param $user_id
     * @return bool
     */
    static function addToQuestion($question_id, $content, $user_id)
    {

        $pdoStatement = Database::prepareStatement(
            'INSERT INTO answer (question_id, content, user_id) VALUES (:question_id, :content, :user_id)');

        if ($pdoStatement) {
            return $pdoStatement->execute(array(
                ':question_id' => $question_id,
                ':content' => $content,
                ':user_id' => $user_id
            ));
        } else {
            return false;
        }
    }

    /**
     * Edit an answer, only owner of this answer can do this
     * @param $content
     * @param $id
     * @return bool
     */
    static function edit($content, $id)
    {
        $pdoStatement = Database::prepareStatement('UPDATE answer SET content=:content WHERE id=:id');

        if (
            $pdoStatement &&
            $pdoStatement->bindParam(':id', $id, PDO::PARAM_INT) &&
            $pdoStatement->bindParam(':content', $content) &&
            $pdoStatement->execute()
        ) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Delete an answer, only owner of this answer can do this
     * @param $id
     * @return null|PDOStatement
     */
    static function delete($id)
    {
        //@todo Version 2 : Admins + superUSers can do this (WIP)
        $pdoStatement = Database::prepareStatement('UPDATE answer SET deleted_at = CURRENT_TIMESTAMP() WHERE id = :id');

        if (
            !$pdoStatement ||
            !$pdoStatement->bindParam('id', $id, PDO::PARAM_INT) ||
            !$pdoStatement->execute()
        ) {
            return $pdoStatement;
        }
    }

    //@todo Create method restoreDeletedComment
}
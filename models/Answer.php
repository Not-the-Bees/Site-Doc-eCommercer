<?php

class Answer
{
    /**
     * @param $question_id
     * @return array|null
     */
    static function display($question_id)
    {
        $answersToQuestion = null;
        $pdoStatement = Database::prepareStatement('SELECT * FROM answer WHERE question_id = :question_id ORDER BY created_at DESC');

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

    static function deleteAnswer()
    {
        //@todo delete comment -> only for Admins and SuperUsers
    }

    //@todo Create method restoreDeletedComment
}
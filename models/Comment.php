<?php

class Comment
{
    /**
     * @param $question_id
     * @param $content
     * @param $user_id
     * @return bool
     */
    static function addCommentToQuestion($question_id, $content, $user_id)
    {

        $pdo_statement = Database::prepareStatement(
            'INSERT INTO question_comment (question_id, content, user_id) VALUES (:question_id, :content, :user_id)');

        if ($pdo_statement)
        {
            return $pdo_statement->execute(array(
                ':question_id'=>$question_id,
                ':content'=>$content,
                ':user_id'=>$user_id
            ));
        } else {
            return false;
        }
    }

    /**
     * @param $answer_id
     * @param $content
     * @param $user_id
     * @return bool
     */
    static function addCommentToAnswer($answer_id, $content, $user_id)
    {

        $pdo_statement = Database::prepareStatement(
            'INSERT INTO answer_comment (answer_id, content, user_id) VALUES (:answer_id, :content, :user_id)');

        if ($pdo_statement)
        {
            return $pdo_statement->execute(array(
                ':answer_id'=>$answer_id,
                ':content'=>$content,
                ':user_id'=>$user_id
            ));
        } else {
            return false;
        }
    }
}
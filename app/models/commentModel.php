<?php
class CommentModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAllCommentsData()
    {
        $query = "SELECT tour_name, avatar, fullname, phone_number, email, content, response, comment_id 
        FROM `tour` T JOIN `comment` C ON T.tour_id = C.tour_id";
        $query = $this->database->select($query);
        if ($query) {
            $result = [];
            while ($row = mysqli_fetch_assoc($query)) {
                array_push($result, $row);
            }
            return json_encode($result, JSON_UNESCAPED_UNICODE);
        } else {
            return false;
        }
    }

    public function addResponse($comment_id, $response)
    {
        $query = "UPDATE comment SET response = '$response' WHERE comment_id = '$comment_id'";
        $query = $this->database->update($query);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getCommentInfo($comment_id) {
        $query = "SELECT tour_name, avatar, fullname, phone_number, email, content, response, comment_id 
        FROM `tour` T JOIN `comment` C ON T.tour_id = C.tour_id WHERE comment_id = '$comment_id'";
        $query = $this->database->select($query);
        if ($query) {
            $result = mysqli_fetch_assoc($query);
            return json_encode($result, JSON_UNESCAPED_UNICODE);
        } else {
            return false;
        }
    }

    public function deleteComment($comment_id) {
        $query = "DELETE FROM comment WHERE comment_id = '$comment_id'";
        $query = $this->database->delete($query);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}

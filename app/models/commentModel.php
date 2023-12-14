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
    
    public function getAll($tour_id)
    {
        $query = "SELECT * FROM comment WHERE tour_id=$tour_id ORDER BY time DESC";
        $data = $this->database->select($query);
        if ($data) {
            return $data->fetch_all(MYSQLI_ASSOC);
        } else {
            return $data;
        }
    }

    public function getById($id)
    {
        $query = "SELECT * FROM comment WHERE comment_id=$id";
        $data = $this->database->select($query);
        return $data->fetch_all(MYSQLI_ASSOC)[0];
    }

    public function insert($data)
    {
        $tour_id = $data['tour_id'];
        $fullname = $data['fullname'];
        $phone_number = $data['phone_number'];
        $email = $data['email'];
        $content = $data['content'];
        $time = $data['time'];

        $query = "INSERT INTO `comment`(`comment_id`, `tour_id`, `fullname`, `phone_number`, `email`, `content`, `response`, `time`) VALUES ('','$tour_id','$fullname','$phone_number','$email','$content','','$time')";

        return $this->database->insert($query);
    }
}

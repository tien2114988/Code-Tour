<?php
class CommentModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAll()
    {
        $query = "SELECT * FROM comment ORDER BY time DESC";
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

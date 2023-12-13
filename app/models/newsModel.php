<?php
class NewsModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAll($start, $per_page)
    {
        $query = "SELECT * FROM news LIMIT $start,$per_page";
        $data = $this->database->select($query);
        if ($data) {
            return $data->fetch_all(MYSQLI_ASSOC);
        } else {
            return $data;
        }
    }

    public function getById($id)
    {
        $query = "SELECT * FROM news WHERE news_id=$id";
        $data = $this->database->select($query);
        return $data->fetch_all(MYSQLI_ASSOC)[0];
    }

    public function getRow()
    {
        $query = "SELECT count(*) as count FROM news";
        $data = $this->database->select($query);
        return $data->fetch_all(MYSQLI_ASSOC)[0]['count'];
    }
}

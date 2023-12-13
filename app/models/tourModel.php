<?php
class TourModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAll($category_id = 0, $start = 1, $per_page = 6)
    {
        if ($category_id != 0) {
            $query = "SELECT * FROM tour WHERE category_id=$category_id LIMIT $start,$per_page";
        } else {
            $query = "SELECT * FROM tour LIMIT $start,$per_page";
        }
        $data = $this->database->select($query);
        if ($data) {
            return $data->fetch_all(MYSQLI_ASSOC);
        } else {
            return $data;
        }

    }

    public function getById($id)
    {
        $query = "SELECT * FROM tour WHERE category_id=$id";
        $data = $this->database->select($query);
        return $data->fetch_all(MYSQLI_ASSOC)[0];
    }

    public function getRow($category_id = 0)
    {
        if ($category_id != 0) {
            $query = "SELECT count(*) as count FROM tour WHERE category_id=$category_id";
        } else {
            $query = "SELECT count(*) as count FROM tour";
        }

        $data = $this->database->select($query);
        return $data->fetch_all(MYSQLI_ASSOC)[0]['count'];
    }

}

<?php
class ScheduleModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAll($tour_id = '')
    {
        $query = "SELECT * FROM tour_schedule WHERE tour_id=$tour_id ORDER BY day ASC";
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

}

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
        if (!is_numeric($category_id)) {
            $query = "SELECT * FROM tour WHERE tour_name like '%$category_id%' LIMIT $start,$per_page";
        } else if ($category_id != 0) {
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
        $query = "SELECT * FROM tour WHERE tour_id=$id";
        $data = $this->database->select($query);
        return $data->fetch_all(MYSQLI_ASSOC)[0];
    }

    public function getRow($category_id = 0)
    {
        if (!is_numeric($category_id)) {
            $query = "SELECT count(*) as count FROM tour WHERE tour_name like '%$category_id%';";
        } else if ($category_id == 0) {
            $query = "SELECT count(*) as count FROM tour";
        } else {
            $query = "SELECT count(*) as count FROM tour WHERE category_id=$category_id";
        }

        $data = $this->database->select($query);
        if ($data) {
            return $data->fetch_all(MYSQLI_ASSOC)[0]['count'];
        } else {
            return 0;
        }
    }
    
    public function getThree(){
        $sql = "SELECT DISTINCT * from tour join tour_schedule on tour.tour_id = tour_schedule.tour_id order by rand() limit 3;";
        $data = $this->database->select($sql);
        // var_dump($data);
        return $data;
    }
    public function getFive(){
        $sql = "SELECT DISTINCT * from tour join tour_schedule on tour.tour_id = tour_schedule.tour_id order by rand() limit 5;";
        $data = $this->database->select($sql);
        // var_dump($data);
        return $data;
    }
}
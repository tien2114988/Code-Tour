<?php
class ImgModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAll()
    {
        $query = "SELECT * FROM tour_image join tour on tour_image.tour_id = tour.tour_id ORDER BY RAND() LIMIT 20 ";
        $data = $this->database->select($query);
        return $data->fetch_all(MYSQLI_ASSOC);
    }
}

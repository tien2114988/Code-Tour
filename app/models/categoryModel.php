<?php
class CategoryModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAll()
    {
        $query = "SELECT * FROM category";
        $data = $this->database->select($query);
        return $data->fetch_all(MYSQLI_ASSOC);
    }
}

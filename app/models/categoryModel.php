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
        if ($data) {
            return $data->fetch_all(MYSQLI_ASSOC);
        } else {
            return array();
        }
    }

    public function getCategoryName($id)
    {
        $query = "SELECT * FROM category WHERE category_id=$id";
        $data = $this->database->select($query);
        return $data->fetch_all(MYSQLI_ASSOC)[0]['category_name'];
    }
    public function getAllCategory()
    {
        $query = "SELECT category.category_id, category_name, category_img, COUNT(tour.category_id) as count_tour 
        from category left join tour on category.category_id = tour.category_id group by category.category_id having count_tour > 0 LIMIT 5;";
        $data = $this->database->select($query);
        return $data->fetch_all(MYSQLI_ASSOC);
    }
}

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

    public function getCategoriesData()
    {
        $query = "SELECT C.category_id, category_name, category_img, COUNT(T.tour_id) as tour_count
        FROM `category` C LEFT JOIN `tour` T ON C.category_id = T.category_id 
        GROUP BY C.category_id";
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

    public function addCategory($category_name, $category_img)
    {
        $query = "INSERT INTO category (category_name, category_img) VALUES ('$category_name', '$category_img')";
        return $this->database->insert($query);
    }

    public function deleteCategory($category_id) {
        $tours = "SELECT * FROM tour WHERE category_id = '$category_id'";
        $tours = $this->database->select($tours);
        if ($tours && mysqli_num_rows($tours) > 0) {
            // Return 1 -> Category is not empty
            return 1;
        }
        $query = "DELETE FROM category WHERE category_id = '$category_id'";
        $query = $this->database->delete($query);
        if ($query) {
            // Return 0 -> Deleted successfully
            return 0;
        } else {
            // Return 2 -> Some error with delete?
            return 2;
        }
    }

    public function getCategoryInfo($category_id) {
        $query = "SELECT * FROM category WHERE category_id = '$category_id'";
        $query = $this->database->select($query);
        if ($query) {
            return mysqli_fetch_assoc($query);
        } else {
            return false;
        }
    }

    public function updateCategory($category_id, $category_name, $category_img) {
        $query = "UPDATE category SET category_name = '$category_name', category_img = '$category_img' WHERE category_id = '$category_id'";
        $query = $this->database->update($query);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}

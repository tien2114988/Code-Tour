<?php
class CategoriesController extends Controller
{
    private $categoryModel;
    private $categoryData;

    public function __construct()
    {
        $this->categoryModel = $this->model("categoryModel");
        $this->categoryData = json_decode($this->categoryModel->getCategoriesData());
    }

    public function index()
    {
        $this->categoryData = json_decode($this->categoryModel->getCategoriesData());
        $this->viewAdmin('layout', ['page' => 'tabs/categories/categories', 'categories' => $this->categoryData]);
    }

    public function viewDeleteResult($res)
    {
        $this->viewAdmin('layout', ['page' => 'tabs/categories/deleteResult', 'result' => $res]);
    }

    public function viewUpdateResult($res) {
        $this->viewAdmin('layout', ['page' => 'tabs/categories/updateResult', 'result' => $res]);
    }

    public function addCategory()
    {
        if (isset($_POST['addSubmit'])) {
            // 1. Get input data
            $category_name = $_POST["category_name"];
            $category_img = $_POST["category_img"];
            // 2. Insert -> DB
            $result = $this->categoryModel->addCategory($category_name, $category_img);
            // 3. Show notification
            header("Location: /Code-Tour/public/admin/categories");
        }
    }

    public function deleteCategory($category_id = -1)
    {
        if ($category_id == -1) {
            header("Location: /Code-Tour/public/admin/categories");
        }
        $result = $this->categoryModel->deleteCategory($category_id);
        $this->viewDeleteResult($result);
    }

    public function editCategory($category_id = -1)
    {
        if ($category_id == -1) {
            header("Location: /Code-Tour/public/admin/categories");
        }

        $category = $this->categoryModel->getCategoryInfo($category_id);

        $this->viewAdmin('layout', ['page' => 'tabs/categories/editCategory', 'category' => $category]);
    }

    public function updateCategory($category_id = -1)
    {
        if ($category_id == -1) {
            header("Location: /Code-Tour/public/admin/categories");
        }
        if (isset($_POST["editSubmit"])) {
            // 1. Get input data
            $category_name = $_POST["category_name"];
            $category_img = $_POST["category_img"];
            // 2. Update -> DB
            $result = $this->categoryModel->updateCategory($category_id, $category_name, $category_img);
            // 3. Show notification
            $this->viewUpdateResult($result);
        }
    }
}

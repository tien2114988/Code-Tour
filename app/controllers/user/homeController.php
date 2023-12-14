<?php

class HomeController extends Controller
{
    private $categoryModel;
    private $category;
    private $generalModel;
    private $general;

    private $contactModel;
    public function __construct()
    {
        $this->categoryModel = $this->model("categoryModel");
        $this->contactModel = $this->model("contactModel");
        $this->generalModel = $this->model("generalModel");

        $this->general = $this->generalModel->getAll();

        $this->category = $this->categoryModel->getAll();
    }
    public function index()
    {
        $this->viewUser('layout', ['page' => 'home/homepage', 'category' => $this->category, 'general' => $this->general]);
    }

    public function introduction()
    {
        $this->viewUser('layout', ['page' => 'home/introduction', 'category' => $this->category, 'general' => $this->general]);
    }

    public function contact()
    {
        $this->viewUser('layout', ['page' => 'home/contact', 'category' => $this->category, 'general' => $this->general]);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = filter_var($_POST['fullname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            $address = filter_var($_POST['address'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $phone = filter_var($_POST['phone'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            if (empty($name) || empty($address) || empty($phone) || empty($description)) {
                // Handle missing required fields
                $error = "All fields are required";
            }
            if ($this->contactModel->insert($name, $address, $phone, $email, $description)) {
                echo "<script type='text/javascript'>toastr.success('Cảm ơn bạn đã liên hệ với chúng tôi')</script>";
            }

        }
    }

    public function photography()
    {
        $this->viewUser('layout', ['page' => 'home/photography', 'category' => $this->category, 'general' => $this->general]);
    }
}

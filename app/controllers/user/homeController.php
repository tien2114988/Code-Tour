<?php

class HomeController extends Controller
{
    private $categoryModel;
    private $category;
    private $sub_cate;
    private $contactModel;

    private $newsModel;
    private $news;

    private $tourModel;
    private $tour_featured;

    private $imgModel;
    public function __construct()
    {
        $this->categoryModel = $this->model("categoryModel");
        $this->contactModel = $this->model("contactModel");
        $this->newsModel = $this->model("newsModel");
        $this->tourModel = $this->model("tourModel");
        $this->imgModel = $this->model("imgModel");
        $this->category = $this->categoryModel->getAll();
    }
    public function index()
    {
        $this->sub_cate = $this->categoryModel->getAllCategory();
        $this->news = $this->newsModel->getTwo();
        $this->tour_featured = $this->tourModel->getThree();
        $tours = $this->tour_featured->fetch_all(MYSQLI_ASSOC);
        $_tours = [];
        foreach ($tours as $tour) {
            $tour = $this->format_price_by_tour($tour);
            $_tours[] = $tour;
        }
        $tours5 = $this->tourModel->getFive();
        $_tours_five = [];
        foreach ($tours5 as $tour) {
            $tour = $this->format_price_by_tour($tour);
            $_tours_five[] = $tour;
        }
        $this->viewUser('layout', [
            'page' => 'home/homepage', 'category' => $this->category, 'sub_cate' => $this->sub_cate, 'news' => $this->news,
            'tour_feature' => $_tours, 'tour_five' => $_tours_five
        ]);
    }

    public function introduction()
    {
        $this->viewUser('layout', ['page' => 'home/introduction', 'category' => $this->category]);
    }
    private function format_price_by_tour($tour)
    {
        $tour['adult_price'] = number_format($tour['adult_price'], 0, ',', '.');
        $tour['child_price'] = number_format($tour['child_price'], 0, ',', '.');
        return $tour;
    }
    public function contact()
    {
        $this->viewUser('layout', ['page' => 'home/contact', 'category' => $this->category]);
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

    public function news()
    {

        $this->viewUser('layout', ['page' => 'home/news', 'category' => $this->category]);
    }

    public function photography()
    {
        $all_img = $this->imgModel->getAll();
        
        $this->viewUser('layout', ['page' => 'home/photography', 'category' => $this->category,
            'imgs' => $all_img]);
    }
}

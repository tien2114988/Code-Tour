<?php

class TourController extends Controller
{
    private $tourModel;
    private $categoryModel;
    private $category;
    private $commentModel;
    private $scheduleModel;

    public function __construct()
    {
        $this->tourModel = $this->model("tourModel");
        $this->scheduleModel = $this->model("scheduleModel");
        $this->commentModel = $this->model("commentModel");
        $this->categoryModel = $this->model("categoryModel");
        $this->category = $this->categoryModel->getAll();
    }
    public function tour_list($category_id = '')
    {
        $tour = $this->tourModel->getAll($category_id);
        if ($category_id != '') {
            $category_name = $this->categoryModel->getCategoryName($category_id);
        } else {
            $category_name = 'Danh sách tour';
        }

        $this->viewUser('layout', ['page' => 'tour/tour-list', 'category' => $this->category, 'category_name' => $category_name, 'tour' => $tour]);
    }

    public function tour_detail($id)
    {
        $tour = $this->tourModel->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $content = $_POST['content'];

            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $time = date('Y-m-d H:i:s');

            $this->commentModel->insert(['tour_id' => $tour['tour_id'], 'fullname' => $fullname, 'email' => $email, 'phone_number' => $phone_number, 'content' => $content, 'time' => $time]);
        }

        $comment = $this->commentModel->getAll();

        $schedule = $this->scheduleModel->getAll($id);
        $this->viewUser('layout', ['page' => 'tour/tour-detail', 'category' => $this->category, 'tour' => $tour, 'schedule' => $schedule, 'comment' => $comment]);
    }

    public function price_list()
    {
        $tour = $this->tourModel->getAll();
        $this->viewUser('layout', ['page' => 'tour/price-list', 'category' => $this->category, 'tour' => $tour]);
    }

    public function booking($id)
    {
        $tour = $this->tourModel->getById($id);
        $this->viewUser('layout', ['page' => 'tour/booking', 'category' => $this->category, 'tour' => $tour]);
    }

}

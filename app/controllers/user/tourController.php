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

    private function format_price($tour)
    {
        for ($i = 0; $i < count($tour); $i++) {
            $tour[$i]['adult_price'] = number_format($tour[$i]['adult_price'], 0, ',', '.');
            $tour[$i]['child_price'] = number_format($tour[$i]['child_price'], 0, ',', '.');
        }
        return $tour;
    }

    private function format_price_by_tour($tour)
    {
        $tour['adult_price'] = number_format($tour['adult_price'], 0, ',', '.');
        $tour['child_price'] = number_format($tour['child_price'], 0, ',', '.');
        return $tour;
    }

    public function tour_list($category_id = 0, $page = 1)
    {
        //pagination
        $per_page = 6;

        $maxRecord = $this->tourModel->getRow($category_id);
        $maxPage = ceil($maxRecord / $per_page);

        $start = ($page - 1) * $per_page;

        //
        $tour = $this->tourModel->getAll($category_id, $start, $per_page);
        if ($category_id != 0) {
            $category_name = $this->categoryModel->getCategoryName($category_id);
        } else {
            $category_name = 'Danh sách tour';
        }

        $this->viewUser('layout', ['page' => 'tour/tour-list', 'category' => $this->category, 'category_name' => $category_name, 'tour' => $this->format_price($tour), 'maxPage' => $maxPage, 'currentPage' => $page, 'category_id' => $category_id]);
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

        $this->viewUser('layout', ['page' => 'tour/tour-detail', 'category' => $this->category, 'tour' => $this->format_price_by_tour($tour), 'schedule' => $schedule, 'comment' => $comment]);
    }

    public function price_list($page = 1)
    {
        //pagination
        $per_page = 12;

        $maxRecord = $this->tourModel->getRow();
        $maxPage = ceil($maxRecord / $per_page);

        $start = ($page - 1) * $per_page;

        //
        $tour = $this->tourModel->getAll(0, $start, $per_page);

        $this->viewUser('layout', ['page' => 'tour/price-list', 'category' => $this->category, 'tour' => $this->format_price($tour)]);
    }

    public function booking($id)
    {
        $tour = $this->tourModel->getById($id);
        $this->viewUser('layout', ['page' => 'tour/booking', 'category' => $this->category, 'tour' => $this->format_price_by_tour($tour)]);
    }

}

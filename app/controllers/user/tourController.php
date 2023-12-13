<?php

class TourController extends Controller
{
    private $tourModel;
    private $categoryModel;
    private $category;
    private $commentModel;
    private $scheduleModel;
    private $bookingModel;

    public function __construct()
    {
        $this->tourModel = $this->model("tourModel");
        $this->scheduleModel = $this->model("scheduleModel");
        $this->commentModel = $this->model("commentModel");
        $this->bookingModel = $this->model("bookingModel");
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

    public function tour_list($category_id = 0, $page = 1, $search = '')
    {
        //pagination
        $per_page = 6;

        if ($category_id == -1) {
            if (isset($_GET['search'])) {
                $search = $_GET['search'];
            }
            $maxRecord = $this->tourModel->getRow($search);
        } else {
            $maxRecord = $this->tourModel->getRow($category_id);
        }

        $maxPage = ceil($maxRecord / $per_page);

        $start = ($page - 1) * $per_page;

        //
        if ($category_id == 0) {
            $tour = $this->tourModel->getAll($category_id, $start, $per_page);
            $category_name = 'Danh sách tour';
        } else if ($category_id == -1) {
            if (isset($_GET['search'])) {
                $search = $_GET['search'];
            }
            $tour = $this->tourModel->getAll($search, $start, $per_page);
            $category_name = 'Kết quả tìm kiếm Tour cho từ khóa "' . $search . '"';
        } else {
            $tour = $this->tourModel->getAll($category_id, $start, $per_page);
            $category_name = $this->categoryModel->getCategoryName($category_id);
        }

        if ($tour) {
            $tour = $this->format_price($tour);
        }

        $this->viewUser('layout', ['page' => 'tour/tour-list', 'category' => $this->category, 'category_name' => $category_name, 'tour' => $tour, 'maxPage' => $maxPage, 'currentPage' => $page, 'category_id' => $category_id, 'search' => $search]);
    }

    private function checkEmail($value)
    {
        $pattern = "/(.{1}).*(@{1})(.{1}).*((\.){1})(.{1}).*/";
        if (!preg_match($pattern, $value)) {
            return false;
        }
        return true;
    }

    private function checkPhone($phoneNumber)
    {
        // Remove any non-digit characters
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

        // Check if the cleaned phone number has exactly 10 digits
        if (strlen($phoneNumber) === 10 && ctype_digit($phoneNumber)) {
            return true;
        } else {
            return false;
        }
    }

    public function tour_detail($id)
    {
        $tour = $this->tourModel->getById($id);

        $fullname = $email = $phone_number = $content = '';
        $fullname_err = $email_err = $phone_number_err = $content_err = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_POST['fullname']) || strlen($_POST['fullname']) < 2) {
                $fullname_err = 'Tên phải từ 2 kí tự trở lên';
            } else {
                $fullname = $_POST['fullname'];
            }

            if (!isset($_POST['email']) || !$this->checkEmail($_POST['email'])) {
                $email_err = 'Email phải theo định dạng sth@sth.sth';
            } else {
                $email = $_POST['email'];
            }

            if (!isset($_POST['phone_number']) || !$this->checkPhone($_POST['phone_number'])) {
                $phone_number_err = 'Số điện thoại phải gồm 10 số';
            } else {
                $phone_number = $_POST['phone_number'];
            }

            if (!isset($_POST['content']) || strlen($_POST['content']) <= 0) {
                $content_err = 'Chưa nhập nội dung bình luận';
            } else {
                $content = $_POST['content'];

            }

            if (!$fullname_err && !$email_err && !$phone_number_err && !$content_err) {
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $time = date('Y-m-d H:i:s');

                $this->commentModel->insert(['tour_id' => $tour['tour_id'], 'fullname' => $fullname, 'email' => $email, 'phone_number' => $phone_number, 'content' => $content, 'time' => $time]);
            }

        }

        $comment = $this->commentModel->getAll($id);

        $schedule = $this->scheduleModel->getAll($id);

        if ($tour) {
            $tour = $this->format_price_by_tour($tour);
        }

        $this->viewUser('layout', ['page' => 'tour/tour-detail', 'category' => $this->category, 'tour' => $tour, 'schedule' => $schedule, 'comment' => $comment, 'fullname_err' => $fullname_err, 'email_err' => $email_err, 'phone_number_err' => $phone_number_err, 'content_err' => $content_err]);
    }

    public function price_list($page = 1)
    {
        //pagination
        $per_page = 6;

        $maxRecord = $this->tourModel->getRow();
        $maxPage = ceil($maxRecord / $per_page);

        $start = ($page - 1) * $per_page;

        //
        $tour = $this->tourModel->getAll(0, $start, $per_page);

        if ($tour) {
            $tour = $this->format_price($tour);
        }

        $this->viewUser('layout', ['page' => 'tour/price-list', 'category' => $this->category, 'tour' => $tour, 'maxPage' => $maxPage, 'currentPage' => $page]);
    }

    public function booking($id)
    {
        $tour = $this->tourModel->getById($id);

        $this->viewUser('layout', ['page' => 'tour/booking', 'category' => $this->category, 'tour' => $tour]);
    }

    public function make_booking($id)
    {
        $tour = $this->tourModel->getById($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $fullname = $_POST['fullname'];
            $phone_number = $_POST['phone_number'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $adult_count = 10;
            $child_count = 5;
            $depart_date = date('Y-m-d H:i:s');
            $created_datetime = date('Y-m-d H:i:s');
            $total_money = 30000;

            $this->bookingModel->insert(["tour_id" => $id,
                "fullname" => $fullname,
                "phone_number" => $phone_number,
                "email" => $email,
                "adult_count" => $adult_count, "child_count" => $child_count,
                "depart_date" => $depart_date,
                "total_money" => $total_money,
                "address" => $address,
                "user_id" => 1,
                "created_datetime" => $created_datetime,
            ]);

        }
        $this->viewUser('layout', ['page' => 'tour/booking', 'category' => $this->category, 'tour' => $tour]);

    }

}

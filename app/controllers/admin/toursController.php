<?php
class ToursController extends Controller
{
    private $tourModel;
    private $categoryModel;

    public function __construct()
    {
        $this->tourModel = $this->model('tourModel');
        $this->categoryModel = $this->model('categoryModel');
    }

    public function index()
    {
        if (isset($_SESSION['user_is_admin'])) {

            $this->viewAdmin('layout', ['page' => 'tabs/tour/tours', 'tour_data' => $this->tourModel->getAll_tri()]);
        } else {
            $path = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);

            header('Location:' . $path . 'user/home/homepage');
        }
    }

    public function themTour()
    {
        if (isset($_SESSION['user_is_admin'])) {

            $this->viewAdmin('layout', ['page' => 'tabs/tour/addTour', 'category' => $this->categoryModel->getAll()]);
        } else {
            $path = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);

            header('Location:' . $path . 'user/home/homepage');
        }
    }

    public function tourDetail($tour_id)
    {
        if (isset($_SESSION['user_is_admin'])) {
            $this->viewAdmin('layout', ['page' => 'tabs/tour/tourDetail', 'tour_id' => $tour_id, "tour_info" => $this->tourModel->getById_tri($tour_id)]);
        } else {
            $path = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);

            header('Location:' . $path . 'user/home/homepage');
        }
    }

    public function deleteSchedule($tour_id, $schedule_id, $day)
    {
        $this->tourModel->deleteSchedule($schedule_id, $day);
        global $path;
        header("Location: {$path}admin/tours/tourDetail/$tour_id");
        exit();
    }

    public function editTour($tour_id)
    {
        $this->tourModel->updateTour(
            $tour_id,
            $_POST['ten-tour'],
            $_POST['gia-nguoi-lon'],
            $_POST['gia-tre-em'],
            $_POST['bao-gom'],
            $_POST['khong-bao-gom'],
            $_POST['dieu-kien-dat-tour'],
            $_POST['phuong-tien'],
            $_POST['so-ngay'],
            $_POST['mo-ta'],
            $_POST['dieu-kien-huy-tour'],
            $_POST['danh-gia'],
            $_POST['hinh-anh']
        );
        global $path;
        header("Location: {$path}admin/tours/tourDetail/$tour_id");

    }
    public function addSchedulePost()
    {
        // $this->tourModel->addSchedule($tour_id, $schedule_id, $day, $location, $description);
        // print_r($_POST);
        // $maxDay = $this->tourModel->getMaxDay()[0][0];
        // print_r($maxDay);
        // echo $maxDay;
        // if ($_POST['day'] > $maxDay) {
        $this->tourModel->addSchedule($_POST['tour_id'], $_POST['day'], $_POST['dia-diem'], $_POST['mo-ta-lich-trinh']);
        global $path;
        header("Location: {$path}admin/tours/tourDetail/$_POST[tour_id]");
        // } else {
        //     echo "<h1>Số trang nhập không được lớn hơn $maxDay.</h1>";
        //     echo "<a href=" . "/Code-Tour/public/admin/tours/tourDetail/$_POST[tour_id]>Quay về</a>";
        // }
        exit();
    }

    public function deleteTour($tour_id)
    {
        $this->tourModel->deleteTour($tour_id);
        global $path;
        header("Location: {$path}admin/tours");
    }
    public function addTour()
    {
        $this->tourModel->addTour($_POST);
        global $path;

        header("Location: {$path}admin/tours");
    }
}

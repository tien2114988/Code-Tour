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
        $this->viewAdmin('layout', ['page' => 'tabs/tour/tours', 'tour_data' => $this->tourModel->getAll()]);
    }

    public function themTour(){
        $this->viewAdmin('layout', ['page' => 'tabs/tour/addTour', 'category'=> $this->categoryModel->getAll()]);
    }

    public function tourDetail($tour_id)
    {
        $this->viewAdmin('layout', ['page' => 'tabs/tour/tourDetail', 'tour_id' => $tour_id, "tour_info" => $this->tourModel->getById($tour_id)]);
    }

    public function deleteSchedule($tour_id, $schedule_id, $day)
    {
        $this->tourModel->deleteSchedule($schedule_id, $day);
        header("Location: /Code-Tour/public/admin/tours/tourDetail/$tour_id");
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

        header("Location: /Code-Tour/public/admin/tours/tourDetail/$tour_id");

    }
    public function addSchedulePost()
    {
        // $this->tourModel->addSchedule($tour_id, $schedule_id, $day, $location, $description);
        // print_r($_POST);
        $maxDay = $this->tourModel->getMaxDay()[0][0];
        // print_r($maxDay);
        // echo $maxDay;
        if ($_POST['day'] > $maxDay) {
            $this->tourModel->addSchedule($_POST['tour_id'], $_POST['day'], $_POST['dia-diem'], $_POST['mo-ta-lich-trinh']);
            header("Location: /Code-Tour/public/admin/tours/tourDetail/$_POST[tour_id]");
        } else {
            echo "<h1>Số trang nhập không được lớn hơn $maxDay.</h1>";
            echo "<a href=" . "/Code-Tour/public/admin/tours/tourDetail/$_POST[tour_id]>Quay về</a>";
        }
        exit();
    }

    public function deleteTour($tour_id){
        $this->tourModel->deleteTour($tour_id);
        header('Location: /Code-Tour/public/admin/tours');
    }
    public function addTour(){
        $this->tourModel->addTour($_POST);
        header('Location: /Code-Tour/public/admin/tours');
    }

}

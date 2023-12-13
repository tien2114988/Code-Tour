<?php

class TourController extends Controller
{
    private $tourModel;
    private $categoryModel;
    private $category;

    public function __construct()
    {
        $this->tourModel = $this->model("tourModel");
        $this->scheduleModel = $this->model("scheduleModel");
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
        $schedule = $this->scheduleModel->getAll($id);
        $this->viewUser('layout', ['page' => 'tour/tour-detail', 'category' => $this->category, 'tour' => $tour, 'schedule' => $schedule]);
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

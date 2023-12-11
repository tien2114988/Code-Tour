<?php

class TourController extends Controller
{
    private $tourModel;
    private $categoryModel;
    private $category;

    public function __construct()
    {
        $this->tourModel = $this->model("tourModel");
        $this->categoryModel = $this->model("categoryModel");
        $this->category = $this->categoryModel->getAll();
    }
    public function tour_list()
    {
        $this->viewUser('layout', ['page' => 'tour/tour-list', 'category' => $this->category]);
    }

    public function tour_detail()
    {
        $this->viewUser('layout', ['page' => 'tour/tour-detail', 'category' => $this->category]);
    }

    public function price_list()
    {
        $this->viewUser('layout', ['page' => 'tour/price-list', 'category' => $this->category]);
    }

    public function booking()
    {
        $this->viewUser('layout', ['page' => 'tour/booking', 'category' => $this->category]);
    }

}

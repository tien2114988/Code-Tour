<?php

class HomeController extends Controller
{
    private $categoryModel;
    private $category;

    public function __construct()
    {
        $this->categoryModel = $this->model("categoryModel");
        $this->category = $this->categoryModel->getAll();
    }
    public function index()
    {
        $this->viewUser('layout', ['page' => 'home/homepage', 'category' => $this->category]);
    }

    public function introduction()
    {
        $this->viewUser('layout', ['page' => 'home/introduction', 'category' => $this->category]);
    }

    public function contact()
    {
        $this->viewUser('layout', ['page' => 'home/contact', 'category' => $this->category]);
    }

    public function photography()
    {
        $this->viewUser('layout', ['page' => 'home/photography', 'category' => $this->category]);
    }
}

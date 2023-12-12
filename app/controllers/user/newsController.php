<?php

class NewsController extends Controller
{
    private $newsModel;
    private $categoryModel;
    private $category;

    public function __construct()
    {
        $this->newsModel = $this->model("newsModel");
        $this->categoryModel = $this->model("categoryModel");
        $this->category = $this->categoryModel->getAll();
    }
    public function news_list()
    {
        $this->viewUser('layout', ['page' => 'news/news-list', 'category' => $this->category]);
    }

    public function news_detail()
    {
        $this->viewUser('layout', ['page' => 'news/news-detail', 'category' => $this->category]);
    }
}

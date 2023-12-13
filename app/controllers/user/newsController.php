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
        $news = $this->newsModel->getAll();
        $this->viewUser('layout', ['page' => 'news/news-list', 'category' => $this->category, 'news' => $news]);
    }

    public function news_detail($id)
    {
        $news = $this->newsModel->getById($id);
        $this->viewUser('layout', ['page' => 'news/news-detail', 'category' => $this->category, 'news' => $news]);
    }
}

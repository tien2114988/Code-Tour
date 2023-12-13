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
    public function news_list($page = 1)
    {
        $per_page = 6;

        $maxRecord = $this->newsModel->getRow();
        $maxPage = ceil($maxRecord / $per_page);

        $start = ($page - 1) * $per_page;

        $news = $this->newsModel->getAll($start, $per_page);

        $this->viewUser('layout', ['page' => 'news/news-list', 'category' => $this->category, 'news' => $news, 'maxPage' => $maxPage, 'currentPage' => $page]);
    }

    public function news_detail($id)
    {
        $news = $this->newsModel->getById($id);
        $this->viewUser('layout', ['page' => 'news/news-detail', 'category' => $this->category, 'news' => $news]);
    }
}

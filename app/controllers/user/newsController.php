<?php

class NewsController extends Controller
{
    private $newsModel;
    private $categoryModel;
    private $category;
    private $generalModel;
    private $general;

    public function __construct()
    {
        $this->newsModel = $this->model("newsModel");
        $this->categoryModel = $this->model("categoryModel");
        $this->category = $this->categoryModel->getAll();
        $this->generalModel = $this->model("generalModel");
        $this->general = $this->generalModel->getAll();

    }
    public function news_list($page = 1, $search = '')
    {
        $per_page = 6;

        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $maxRecord = $this->newsModel->getRow($search);
        } else if ($search != '') {
            $maxRecord = $this->newsModel->getRow($search);
        } else {
            $maxRecord = $this->newsModel->getRow();
        }

        $maxPage = ceil($maxRecord / $per_page);

        $start = ($page - 1) * $per_page;
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $news = $this->newsModel->getAll($start, $per_page, $search);
            $heading = 'Kết quả tìm kiếm tin tức cho từ khóa "' . $search . '"';
        } else if ($search != '') {
            $news = $this->newsModel->getAll($start, $per_page, $search);
            $heading = 'Kết quả tìm kiếm tin tức cho từ khóa "' . $search . '"';
        } else {
            $news = $this->newsModel->getAll($start, $per_page);
            $heading = 'Tin tức';
        }

        $this->viewUser('layout', ['page' => 'news/news-list', 'category' => $this->category, 'news' => $news, 'maxPage' => $maxPage, 'currentPage' => $page, 'search' => $search, 'heading' => $heading, 'general' => $this->general]);
    }

    public function news_detail($id)
    {
        $news = $this->newsModel->getById($id);
        $this->viewUser('layout', ['page' => 'news/news-detail', 'category' => $this->category, 'news' => $news, 'general' => $this->general]);
    }
}

<?php

class accountController extends Controller
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
        $this->viewUser('layout', ['page' => 'account/index', 'category' => $this->category]);
    }
    public function manage()
    {
        $this->viewUser('layout', ['page' => 'account/manage', 'category' => $this->category]);
    }
    public function update()
    {
        $this->viewUser('layout', ['page' => 'account/update', 'category' => $this->category]);
    }
    public function changepass()
    {
        $this->viewUser('layout', ['page' => 'account/changepass', 'category' => $this->category]);
    }
}

<?php

class AuthenController extends Controller
{

    public function __construct()
    {
        $this->tourModel = $this->model("tourModel");
        $this->categoryModel = $this->model("categoryModel");
    }
    public function login()
    {
        $this->viewAuthen('login', []);
    }

    public function signup()
    {
        $this->viewAuthen('signup', []);
    }
}

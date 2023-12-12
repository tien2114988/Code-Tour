<?php

class AuthenController extends Controller
{

    public function __construct()
    {
        
    }
    public function login()
    {
        $this->viewAuthen('login', ['page' => 'login']);
    }

    public function signup()
    {
        $this->viewAuthen('signup', []);
    }
}

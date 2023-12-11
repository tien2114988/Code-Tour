<?php

class AuthenController extends Controller
{

    public function __construct()
    {
        
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

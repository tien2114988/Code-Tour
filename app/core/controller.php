<?php
class Controller
{

    protected function viewUser($view, $data = [])
    {
        require './views/user/' . $view . '.php';
    }

    protected function viewAdmin($view, $data = [])
    {
        require './views/admin/' . $view . '.php';
    }

    protected function viewAuthen($view, $data = [])
    {
        require './views/authen/' . $view . '.php';
    }

    protected function model($model)
    {
        require_once './models/' . $model . '.php';
        return new $model;
    }
}

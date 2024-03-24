<?php
class Controller
{

    protected function viewUser($view, $data = [])
    {
        require '../app/views/user/' . $view . '.php';
    }

    protected function viewAdmin($view, $data = [])
    {
        require '../app/views/admin/' . $view . '.php';
    }

    protected function viewAuthen($view, $data = [])
    {
        require '../app/views/authen/' . $view . '.php';
    }

    protected function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}

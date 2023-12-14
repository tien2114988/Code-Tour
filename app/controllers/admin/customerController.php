<?php
class CustomerController extends Controller
{
    private $contactModel;

    public function __construct()
    {
        $this->contactModel = $this->model('contactModel');
    }

    public function index()
    {
        $this->viewAdmin('layout', ['page' => 'tabs/customer/customers', 'customers'=>$this->contactModel->getAll()]);
    }
}

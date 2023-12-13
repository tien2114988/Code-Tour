<?php
class TabsController extends Controller {
    private $contactModel;

    public function __construct()
    {
    }

    public function index() {
        $this->viewAdmin('layout', ['page' => 'tabs/members']);
    }

    public function feedbacks() {
        $this->viewAdmin('layout', ['page' => 'tabs/feedbacks']);
    }

    public function customers() {
        $this->viewAdmin('layout', ['page' => 'tabs/customers']);
    }

    public function contact() {
        $this->viewAdmin('layout', ['page' => 'tabs/contact']);
    }

    public function categories() {
        $this->viewAdmin('layout', ['page' => 'tabs/categories']);
    }

    public function tours() {
        $this->viewAdmin('layout', ['page' => 'tabs/tours']);
    }

    public function booking() {
        $this->viewAdmin('layout', ['page' => 'tabs/booking']);
    }

    public function news() {
        $this->viewAdmin('layout', ['page' => 'tabs/news']);
    }
}
?>
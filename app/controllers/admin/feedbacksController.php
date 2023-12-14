<?php
class FeedbacksController extends Controller {
    private $contactModel;

    public function __construct()
    {
    }

    public function index() {
        $this->viewAdmin('layout', ['page' => 'tabs/feedbacks']);
    }
}
?>
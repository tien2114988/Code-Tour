<?php
class GeneralController extends Controller
{
    private $contactModel;
    private $contactData;

    public function __construct()
    {
        $this->contactModel = $this->model("generalModel");
        $this->contactData = json_decode($this->contactModel->getContact());
    }

    public function index()
    {
        $this->viewAdmin('layout', ['page' => 'tabs/contact/contact', 'contact' => $this->contactData]);
    }

    public function viewSuccess() {
        $this->viewAdmin('layout', ['page' => 'tabs/contact/success']);
    }

    public function viewError() {
        $this->viewAdmin('layout', ['page' => 'tabs/contact/error']);
    }

    public function showContact()
    {
        $this->contactData = json_decode($this->contactModel->getContact());
        print_r($this->contactData);
    }

    public function updateContact()
    {
        if (isset($_POST["contactSubmit"])) {
            // 1. Get input data
            $address = $_POST["address"];
            $phone_number = $_POST["phone_number"];
            $hotline = $_POST["hotline"];
            $email = $_POST["email"];
            $transfer_name = $_POST["transfer_name"];
            $account_number = $_POST["account_number"];
            $bank_name = $_POST["bank_name"];
            // 2. Update -> DB
            $result = $this->contactModel->updateContact($address, $phone_number, $hotline, $email, $transfer_name, $account_number, $bank_name);
            // 3. Show notification
            if ($result) {
                $this->viewSuccess();
            } else {
                $this->viewError();
            }
        }
    }
}

<?php
class UsersController extends Controller {
    private $userModel;
    private $userData;

    public function __construct()
    {
        $this->userModel = $this->model("userModel");
        $this->userData = json_decode($this->userModel->getAllUsersData());
    }

    public function index() {
        $this->userData = json_decode($this->userModel->getAllUsersData());
        $this->viewAdmin('layout', ['page' => 'tabs/users/users', 'users' => $this->userData]);
    }

    public function viewResult($res) {
        $this->userData = json_decode($this->userModel->getAllUsersData());
        $this->viewAdmin('layout', ['page' => 'tabs/users/result', 'result' => $res]);
    }

    public function delete($user_id = -1) {
        if ($user_id == -1) {
            header("Location: /Code-Tour/public/admin/users/");
        }
        $this->viewResult($this->userModel->deleteUser($user_id));
    }
}
?>
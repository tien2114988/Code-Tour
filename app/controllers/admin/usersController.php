<?php
class UsersController extends Controller
{
    private $userModel;
    private $userData;

    public function __construct()
    {
        $this->userModel = $this->model("userModel");
        $this->userData = json_decode($this->userModel->getAllUsersData());
    }

    public function index()
    {
        $this->userData = json_decode($this->userModel->getAllUsersData());
        if (isset($_SESSION['user_is_admin'])) {
            $this->viewAdmin('layout', ['page' => 'tabs/users/users', 'users' => $this->userData]);
        } else {
            $path = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);

            header('Location:' . $path . 'user/home/homepage');
        }
    }

    public function viewResult($res)
    {
        $this->userData = json_decode($this->userModel->getAllUsersData());
        if (isset($_SESSION['user_is_admin'])) {
            $this->viewAdmin('layout', ['page' => 'tabs/users/result', 'result' => $res]);
        } else {
            $path = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);

            header('Location:' . $path . 'user/home/homepage');
        }
    }

    public function delete($user_id = -1)
    {

        if (isset($_SESSION['user_is_admin'])) {
            if ($user_id == -1) {
                header("Location: /Code-Tour/public/admin/users/");
            }
            $this->viewResult($this->userModel->deleteUser($user_id));
        } else {
            $path = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);

            header('Location:' . $path . 'user/home/homepage');
        }
    }
}

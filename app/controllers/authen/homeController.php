<?php

class HomeController extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = $this->model("userModel");
    }

    public function login()
    {
        $this->viewAuthen('login', ['page' => 'login']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $error = "";

            if (empty($username) || strlen($username) <= 5) {
                $error = "Yêu cầu nhập tên tài khoản lớn hơn 5 kí tự ";
            } elseif (strlen($password) < 8 || !preg_match('/[A-Za-z]/', $password) || !preg_match('/\d/', $password)) {
                $error = "Mật khẩu mới phải có ít nhất 8 ký tự và chứa cả chữ cái và số";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error = "Email không hợp lệ";
            } else {
                // Everything is okay
                $hash_password = password_hash($password, PASSWORD_DEFAULT);
                $res = $this->userModel->checkExists($email, $username);
                if ($res) {
                    // echo "Da ton tai tai khoan";
                    $error = "Tài khoản hoặc email đã tồn tại";
                }
            }
            if ($error) { // Có lỗi xảy ra
                // $_SESSION['signup-data'] = $_POST;
                echo '<script type="text/javascript">toastr.error("' . htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . '")</script>';
            } else {
                $this->userModel->signup($email, $username, $hash_password);
                echo '<script type="text/javascript">toastr.success("Bạn đã đăng ký thành công")</script>';
                die();
            }
        }
    }

    public function signup()
    {
        // use to login
        // $this->viewAuthen('signup', ['page' => 'login']);
        echo "login\n";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $error = "";

            if (strlen($username_email) > 1 && strlen($username_email) <= 5) {
                $error = "Yêu cầu nhập tên tài khoản lớn hơn 5 kí tự ";
            } else if (strlen($password) > 1 && strlen($password) <= 8) {
                $error = "Mật khẩu của bạn quá ngắn";
            } else {
                // Everything is okay
                $hash_password = password_hash($password, PASSWORD_DEFAULT);
                $res = $this->userModel->checkExists($username_email, $username_email);

                if ($res) {
                    // Thanh cong'

                    $user_record = $res->fetch_assoc();
                    $db_password = $user_record["password"];

                    setcookie('Cookieid', $user_record['user_id'], time() + (864000 * 30), "/");
                    if (password_verify($password, $db_password)) {
                        $_SESSION['user-id'] = $user_record['user_id'];
                        if ($user_record['role'] == 'A') {
                            $_SESSION['user_is_admin'] = true;
                            $path = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
                            header('Location: ' . "$path" . 'admin/users');
                            return;
                        }
                    } else {
                        $error = "Mật khẩu không chính xác";
                    }
                } else {
                    $error = "Tài khoản hoặc email không tồn tại";
                }

            }
            if ($error) { // Có lỗi xảy ra
                // $_SESSION['signup-data'] = $_POST;
                echo $error;
                echo '<script type="text/javascript">toastr.error("' . htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . '")</script>';
                header('Location:' . '');
                die();
            } else {
                echo "Thanh cong";
                // echo '<script type="text/javascript">toastr.success("Bạn đã đăng nhập thành công")</script>';
                $path = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);

                header('Location:' . $path);
                die();
            }
        }
    }
}

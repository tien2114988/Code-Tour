<?php

class accountController extends Controller
{
    private $categoryModel;
    private $category;

    private $user;
    private $userModel;

    private $address;
    private $addressModel;

    private $booking;
    private $bookingModel;
    
    public function __construct()
    {
        $this->categoryModel = $this->model("categoryModel");
        $this->category = $this->categoryModel->getAll();
        $this->userModel = $this->model("userModel");
        $this->addressModel = $this->model("addressModel");
        $this->bookingModel = $this->model("bookingModel");
    }

    public function index()
    {

        if (isset($_SESSION['user-id'])) {
            $user_id = $_SESSION['user-id'];
        }
        $this->user = $this->userModel->getById($user_id);
        $this->address = $this->addressModel->getById($user_id);
        /*
        if ($this->user) {
            var_dump($this->user);
        }
        if ($this->address) {
            var_dump($this->address);
        }
        */
        if ($this->address) {
            $this->address = $this->address->fetch_all(MYSQLI_ASSOC)[0];
        }


        $this->viewUser('layout', ['page' => 'account/index', 'user' => $this->user, 'address' => $this->address]);
    }
    public function manage()
    {
        $this->viewUser('layout', ['page' => 'account/manage', 'category' => $this->category]);
        if (isset($_SESSION['user-id'])) {
            $user_id = $_SESSION['user-id'];
        }
        echo $user_id;
    }
    public function update()
    {

        if (isset($_SESSION['user-id'])) {
            $user_id = $_SESSION['user-id'];
        }
        $this->user = $this->userModel->getById($user_id);
        $this->address = $this->addressModel->getById($user_id);
        if ($this->address) {
            $this->address = $this->address->fetch_all(MYSQLI_ASSOC)[0];
        }
        /*
        var_dump($this->address);
        var_dump($this->user);
        */
        $this->viewUser('layout', ['page' => 'account/update', 'user' => $this->user, 'address' => $this->address]);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fullname = $_POST['fullname'];

            $detail = $_POST['detail'];
            $phone = $_POST['phone'];

            if ($this->address) {
                echo "123";
                exit();
                $this->userModel->update($fullname, $phone, $user_id);
                $this->addressModel->update($detail, $user_id);
            } else {
                
                $this->userModel->update($fullname, $phone, $user_id);
                $this->addressModel->insert($detail, $user_id);
            }
            echo '<script type="text/javascript">toastr.success("Bạn đã cập nhập thành công")</script>';
        }

        die();
    }
    public function logout()
    {
        if (isset($_SESSION['user-id'])) {
            var_dump($_SESSION['user-id']);
            unset($_SESSION['user-id']);
            session_unset();
        } else {
            echo "WTF";
        }
        setcookie('Cookieid', '-1', time() - 86400 * 30, '/');
        setcookie('PHPSESSID', '-1', time() - 86400 * 30, '/');
        $path = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
        header("location:" . $path);
    }
    public function changepass()
    {
        $this->viewUser('layout', ['page' => 'account/changepass', 'category' => $this->category]);
        if (isset($_SESSION['user-id'])) {
            $user_id = $_SESSION['user-id'];
        }
        $this->user = $this->userModel->getById($user_id);
        $record = $this->user;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $password = isset($_POST['password']) ? trim($_POST['password']) : '';
            $npassword = isset($_POST['npassword']) ? trim($_POST['npassword']) : '';
            $cpassword = isset($_POST['cpassword']) ? trim($_POST['cpassword']) : '';
            $email = $record['email'];
            $db_password = $record['password'];

            // Validate input
            $err = "";

            if (empty($password) || empty($npassword) || empty($cpassword)) {
                $err = "Vui lòng điền đầy đủ thông tin.";
            } elseif (!password_verify($password, $db_password)) {
                $err = "Mật khẩu hiện tại không đúng";
            } elseif ($npassword != $cpassword) {
                $err = "Mật khẩu mới và xác nhận mật khẩu không khớp";
            } elseif (strlen($npassword) < 8 || !preg_match('/[A-Za-z]/', $npassword) || !preg_match('/\d/', $npassword)) {
                $err = "Mật khẩu mới phải có ít nhất 8 ký tự và chứa cả chữ cái và số";
            } else {
                $hash_password = password_hash($npassword, PASSWORD_DEFAULT);
                
                
                $success = $this->userModel->updatePassword($hash_password, $email);
                if ($success) {
                    echo '<script type="text/javascript">toastr.success("Bạn đã cập nhập mật khẩu thành công")</script>';
                } else {
                    $err = "Cập nhập mật khẩu không thành công";
                }
            }

            if ($err) {
                echo '<script type="text/javascript">toastr.error("' . htmlspecialchars($err, ENT_QUOTES, 'UTF-8') . '")</script>';
            }
        }
    }
}

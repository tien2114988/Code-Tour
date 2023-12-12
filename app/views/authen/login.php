<?php
$path = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']) . 'authen/';
<<<<<<< HEAD
require_once './app/views/authen/' . $data['page'] . '.php';
=======
require_once './views/authen/' . $data['page'] . '.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Đăng ký hoặc Đăng nhập</title>
    <link rel="stylesheet" href="./public/css/authen.css">
</head>

<body>
    <h2></h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Tạo tài khoản</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social"><i class="bi bi-google"></i></a>
                    <a href="#" class="social"><i class="bi bi-linkedin"></i></a>
                </div>
                <span>hoặc sử dụng email của bạn để đăng ký</span>
                <input type="text" placeholder="Tên" name="username" required />
                <input type="email" placeholder="Email" name="email" required />
                <input type="password" placeholder="Mật khẩu" name="password" required />
                <button>Đăng ký</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Đăng nhập</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social"><i class="bi bi-google"></i></a>
                    <a href="#" class="social"><i class="bi bi-linkedin"></i></a>
                </div>
                <span>hoặc sử dụng tài khoản của bạn</span>
                <input type="email" placeholder="Email" name="email" required />
                <input type="password" placeholder="Mật khẩu" name="password" required />
                <button>Đăng nhập</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Chào bạn đến với Website</h1>
                    <p>Để có thể nhận được những thông tin mới nhất vui lòng đăng ký tài khoản tại đây</p>
                    <button class="ghost" id="signIn">Đăng nhập</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Chào bạn đến với website</h1>
                    <p>Đăng nhập và trải nghiệm</p>
                    <button class="ghost" id="signUp">Đăng ky</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>
            Created with <i class="fa fa-heart"></i> by
            <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
            - Read how I created this and how you can join the challenge
            <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
        </p>
    </footer>
</body>
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
>>>>>>> 88163e4fc14dbe9cba7aebed83b8e591114e82b6

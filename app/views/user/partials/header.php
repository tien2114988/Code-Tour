<?php
if (isset($_SESSION['user-id'])) {
    $user_id = $_SESSION['user-id'];
}
// echo ''.$user_id.'';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodeTour</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,100;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $path ?>/css/page.css">
  <link rel="stylesheet" href="<?php echo $path ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo $path ?>/css/user.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid px-5">
      <a class="me-5 p-0 navbar-brand" href="#">
        <img src="<?php echo $path ?>img/logo.avif" alt="Bootstrap" width="40" height="40">
        CODETOUR
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
          <li class="nav-item mx-1">
            <a class="nav-link active" aria-current="page" href="<?php echo $path ?>user/home/homepage">Trang chủ</a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link active" aria-current="page" href="<?php echo $path ?>user/home/introduction">Giới thiệu</a>
          </li>
          <li class="nav-item dropdown mx-1">
          <a class="nav-link active dropdown-toggle" href="<?php echo $path ?>user/tour/tour_list/0" aria-expanded="false">
          Tour
          </a>
          <ul class="dropdown-menu hover">
              <?php foreach ($data['category'] as $category) {?>
                <li class=""><a class="dropdown-item" href="<?php echo $path ?>user/tour/tour_list/<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></a></li>
              <?php }?>
          </ul>
        </li>
          <li class="nav-item mx-1">
            <a class="nav-link active" aria-current="page" href="<?php echo $path ?>user/tour/price_list">Bảng giá</a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link active" aria-current="page" href="<?php echo $path ?>user/news/news_list">Tin tức</a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link active" aria-current="page" href="<?php echo $path ?>user/home/photography">Hình ảnh</a>
          </li>
          <li class="nav-item mx-1">
            <a class="nav-link active" aria-current="page" href="<?php echo $path ?>user/home/contact">Liên hệ</a>
          </li>
          <li class="nav-item dropdown mx-1">
            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tài khoản
            </a>
            <?php
if (isset($user_id)) {

    ?>
              <div class="header__user-dropdown dropdown-menu">
                <p class="text-center mb-0">THÔNG TIN TÀI KHOẢN</p>
                <hr class="hr hr-blurry w-75 my-2 mx-auto" />
                <p class="ms-4 m-1 px-2"> Xin chào</p>
                <ul class="header__user-list">
                  <li><a href="<?php echo $path ?>user/account/">Thông tin tài khoản</a></li>
                  <li><a href="<?php echo $path ?>user/account/changepass">Đổi mật khẩu</a></li>
                  <li><a href="<?php echo $path ?>user/account/manage">Quản lý đặt tour</a></li>
                  <li><a href="<?php echo $path ?>user/account/logout">Đăng xuất</a>
                  </li>
                </ul>
              </div>
            <?php } else {?>
              <!-- Not login -->
              <div class="header__login-dropdown dropdown-menu">
                <p class="text-center mb-0">THÔNG TIN TÀI KHOẢN</p>
                <hr class="hr hr-blurry w-75 my-2 mx-auto" />
                <div class="d-grid gap-2 col-10 mx-auto">
                  <button onclick="location.href='<?php echo $path ?>authen/home/login'" class="btn btn-primary" type="button">Đăng nhập</button>
                  <!-- <button onclick="location.href=''" class="btn btn-success" type="button">Đăng ký</button> -->
                </div>
              </div>
            <?php }?>
          </li>

      </ul>
      <form class="d-flex" role="search" action="<?php if ($data['page'] != 'news/news-list') {
    echo $path . "user/tour/tour_list/-1";
} else {
    echo $path . "user/news/news_list";
}
?>">
        <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
    </nav>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeTour</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid px-5">
    <a class="navbar-brand" href="#">CodeTour</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
        <li class="nav-item mx-1">
          <a class="nav-link active" aria-current="page" href="<?php echo $path ?>">Trang chủ</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link active" aria-current="page" href="<?php echo $path; ?>home/introduction">Giới thiệu</a>
        </li>
        <li class="nav-item dropdown mx-1">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tour
          </a>
          <ul class="dropdown-menu">
            <?php foreach ($data['category'] as $tour) {?>
            <li><a class="dropdown-item" href="<?php echo $path; ?>tour/tour_list/"><?php echo $tour['category_name']; ?></a></li>
            <?php }?>
          </ul>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link active" aria-current="page" href="<?php echo $path; ?>tour/price_list">Bảng giá</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link active" aria-current="page" href="<?php echo $path; ?>tour/booking">Đặt tour</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link active" aria-current="page" href="<?php echo $path; ?>home/news">Tin tức</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link active" aria-current="page" href="<?php echo $path; ?>home/photography">Hình ảnh</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link active" aria-current="page" href="<?php echo $path; ?>home/contact">Liên hệ</a>
        </li>
        <li class="nav-item dropdown mx-1">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tài khoản
          </a>
          <div class="header__user-dropdown dropdown-menu dropdown-menu-end">
                                    <p class="text-center mb-0">THÔNG TIN TÀI KHOẢN</p>
                                    <hr class="hr hr-blurry w-75 my-2 mx-auto" />
                                    <p class="ms-4 m-1 px-2"> Xin chào</p>
                                    <ul class="header__user-list">
                                        <li><a href="<?php echo $path; ?>account">Thông tin tài khoản</a></li>
                                        <li><a href="<?php echo $path; ?>account">Quản lý đơn hàng</a></li>
                                        <li><a href="<?php echo $path; ?>account">Danh sách địa chỉ</a></li>
                                        <li><a href="?controller=user&&action=logout">Đăng xuất</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Not login -->
                                <div class="header__login-dropdown dropdown-menu dropdown-menu-end">
                                    <p class="text-center mb-0">THÔNG TIN TÀI KHOẢN</p>
                                    <hr class="hr hr-blurry w-75 my-2 mx-auto" />
                                    <div class="d-grid gap-2 col-10 mx-auto">
                                        <button onclick="location.href=''" class="btn btn-primary" type="button">Đăng nhập</button>
                                        <button onclick="location.href=''" class="btn btn-success" type="button">Đăng ký</button>
                                    </div>
                                </div>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

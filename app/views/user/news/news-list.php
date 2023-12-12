


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeTour</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/user.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid px-5">
    <a class="me-5 p-0 navbar-brand" href="#">
      <img src="../../../public/img/logo.avif" alt="Bootstrap" width="40" height="40">
      CODETOUR
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
        <li class="nav-item mx-1">
          <a class="nav-link active" aria-current="page" href="">Trang chủ</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link active" aria-current="page" href="">Giới thiệu</a>
        </li>
        <li class="nav-item dropdown mx-1">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tour
          </a>
          <ul class="dropdown-menu">
            <li class=""><a class="dropdown-item" href="">Miền Tây</a></li>
            <li class=""><a class="dropdown-item" href="">Miền Tây</a></li>
          </ul>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link active" aria-current="page" href="">Bảng giá</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link active" aria-current="page" href="">Đặt tour</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link active" aria-current="page" href="">Tin tức</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link active" aria-current="page" href="">Hình ảnh</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link active" aria-current="page" href="">Liên hệ</a>
        </li>
        <li class="nav-item dropdown mx-1">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tài khoản
          </a>
          <div class="header__user-dropdown dropdown-menu">
                                    <p class="text-center mb-0">THÔNG TIN TÀI KHOẢN</p>
                                    <hr class="hr hr-blurry w-75 my-2 mx-auto" />
                                    <p class="ms-4 m-1 px-2"> Xin chào</p>
                                    <ul class="header__user-list">
                                        <li><a href="">Thông tin tài khoản</a></li>
                                        <li><a href="">Danh sách địa chỉ</a></li>
                                        <li><a href="">Quản lý đặt tour</a></li>
                                        <li><a href="">Đăng xuất</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Not login -->
                                <div class="header__login-dropdown dropdown-menu">
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









<div class="container-fluid news-list">
        <div class="w-75 mx-auto mb-5">
            <h2 class="text-center my-4 text-uppercase">Tin tức</h2>




            <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
                <a class="item-list__card-link px-3 link-underline link-underline-opacity-0"  href="">
                    <div class="item-list__card card col p-0 h-100">
                        <img src="https://tourbonphuong.com/upload/product/chi-tiet-2-9327_1000x1000.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-5 fw-semibold text-center">Tour 1 ngày : Chợ nổi Cái Bè - Cù lao Tân Phong</p>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse corrupti quod mollitia neque recusandae minima, voluptatibus ad error debitis quaerat, perferendis illum distinctio totam tempora molestias earum, hic dignissimos minus.</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-secondary rounded-4">Xem thêm</button>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="item-list__card-link px-3 link-underline link-underline-opacity-0"  href="">
                    <div class="item-list__card card col p-0 h-100">
                        <img src="https://tourbonphuong.com/upload/product/chi-tiet-2-9327_1000x1000.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-5 fw-semibold text-center">Tour 1 ngày : Chợ nổi Cái Bè - Cù lao Tân Phong</p>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse corrupti quod mollitia neque recusandae minima, voluptatibus ad error debitis quaerat, perferendis illum distinctio totam tempora molestias earum, hic dignissimos minus.</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-secondary rounded-4">Xem thêm</button>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="item-list__card-link px-3 link-underline link-underline-opacity-0"  href="">
                    <div class="item-list__card card col p-0 h-100">
                        <img src="https://tourbonphuong.com/upload/product/chi-tiet-2-9327_1000x1000.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-5 fw-semibold text-center">Tour 1 ngày : Chợ nổi Cái Bè - Cù lao Tân Phong</p>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse corrupti quod mollitia neque recusandae minima, voluptatibus ad error debitis quaerat, perferendis illum distinctio totam tempora molestias earum, hic dignissimos minus.</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-secondary rounded-4">Xem thêm</button>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="item-list__card-link px-3 link-underline link-underline-opacity-0"  href="">
                    <div class="item-list__card card col p-0 h-100">
                        <img src="https://tourbonphuong.com/upload/product/chi-tiet-2-9327_1000x1000.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-5 fw-semibold text-center">Tour 1 ngày : Chợ nổi Cái Bè - Cù lao Tân Phong</p>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse corrupti quod mollitia neque recusandae minima, voluptatibus ad error debitis quaerat, perferendis illum distinctio totam tempora molestias earum, hic dignissimos minus.</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-secondary rounded-4">Xem thêm</button>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="item-list__card-link px-3 link-underline link-underline-opacity-0 border"  href="">
                    <div class="item-list__card card col p-0 h-100">
                        <img src="https://tourbonphuong.com/upload/product/chi-tiet-2-9327_1000x1000.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-5 fw-semibold text-center">Tour 1 ngày : Chợ nổi Cái Bè - Cù lao Tân Phong</p>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse corrupti quod mollitia neque recusandae minima, voluptatibus ad error debitis quaerat, perferendis illum distinctio totam tempora molestias earum, hic dignissimos minus.</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-secondary rounded-4">Xem thêm</button>
                            </div>
                        </div>
                    </div>
                </a>

                <div class="pb-5">Không tìm thấy kết quả phù hợp</div>
            </div>


    </div>
</div>




































<div class="bg-whitesmoke py-3">
  <div class="container-fluid row w-75 mx-auto">
    <div class="col-md-6">
      <h5 class="fs-6">THÔNG TIN LIÊN HỆ</h5>
      <ul class="list-group list-unstyled">
        <li class="fw-semibold">Địa chỉ : </li>
        <li class="fw-semibold">Điện thoại : </li>
        <li class="fw-semibold">Hotline : </li>
        <li class="fw-semibold">Email : </li>
      </ul>
    </div>
    <div class="col-md-4">
      <h5 class="fs-6">THÔNG TIN CHUYỂN KHOẢN</h5>
      <ul class="list-group list-unstyled">
        <li class="fw-semibold">Chủ tài khoản : </li>
        <li class="fw-semibold">STK : </li>
        <li class="fw-semibold">Ngân hàng : </li>
      </ul>
    </div>
  </div>
</div>




<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>

</html>

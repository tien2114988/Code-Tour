<nav aria-label="breadcrumb">
    <div class="bg-body-secondary">
        <ol class="mx-auto w-75 breadcrumb py-2 fs-6">
        <li class="breadcrumb-item">
          <a class="text-black link-underline link-underline-opacity-0 breadcrumb__item"
          href="<?php echo $path ?>user/home/homepage">Trang chủ</a></li>
        <li class="breadcrumb-item">
          <a class="text-black link-underline link-underline-opacity-0 breadcrumb__item"
          href="<?php echo $path ?>user/news/news_list">
            Tin tức
          </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $data['news']['title']; ?></li>
      </ol>
    </div>
    </nav>






<div class="container-fluid news-detail">
        <div class="w-75 mx-auto mb-5 d-flex">
            <div class="col-md-8">
              <h2 class="my-4 text-uppercase"><?php echo $data['news']['title'] ?></h2>
              <img class="w-95" src="<?php echo $data['news']['news_img'] ?>" alt="">
              <p class="pt-2"><?php echo $data['news']['opening_paragraph'] ?></p>
              <ol class="">
                <li class="fw-semibold">
                  <p class="mb-1">Vài nét về du lịch Tiền Giang </p>
                  <p class="fw-normal"><?php echo $data['news']['introduction'] ?></p>
                </li>
                <li class="fw-semibold">
                  <p class="mb-1">Đi chơi đâu ở Tiền Giang </p>
                  <p class="fw-normal"><?php echo $data['news']['body'] ?></p>
                </li>
                <li class="fw-semibold">
                  <p class="mb-1">Những điều lưu ý khi đi du lịch Tiền Giang </p>
                  <p class="fw-normal"><?php echo $data['news']['conclusion'] ?></p>
                </li>
              </ol>
            </div>
            <div class="col-md-4">
              <div class="mx-3 my-5 border px-1 py-2">
                <h5 class="text-uppercase text-center m-2">Tour liên quan</h5>
                <hr class="hr hr-blurry w-75 my-2 mx-auto" />
                <a href="" class="d-flex link-underline-opacity-0 link-dark border mb-1 tour-cart">
                  <img class="w-25" src="https://tourbonphuong.com/upload/product/chi-tiet-2-9327_1000x1000.jpg" alt="">
                  <div class="ps-1">
                    <p class="m-0 fw-semibold tour-name">Tour name</p>
                    <p class="m-0 price">Giá : <span class="text-danger">500.000 đ</span></p>
                  </div>
                </a>
                <a href="" class="d-flex link-underline-opacity-0 link-dark border mb-1 tour-cart">
                  <img class="w-25" src="https://tourbonphuong.com/upload/product/chi-tiet-2-9327_1000x1000.jpg" alt="">
                  <div class="ps-1">
                    <p class="m-0 fw-semibold tour-name">Tour name</p>
                    <p class="m-0 price">Giá : <span class="text-danger">500.000 đ</span></p>
                  </div>
                </a>
                <a href="" class="d-flex link-underline-opacity-0 link-dark border mb-1 tour-cart">
                  <img class="w-25" src="https://tourbonphuong.com/upload/product/chi-tiet-2-9327_1000x1000.jpg" alt="">
                  <div class="ps-1">
                    <p class="m-0 fw-semibold tour-name">Tour name</p>
                    <p class="m-0 price">Giá : <span class="text-danger">500.000 đ</span></p>
                  </div>
                </a>
              </div>
              <div></div>
            </div>

      </div>
</div>































<nav aria-label="breadcrumb">
    <div class="bg-body-secondary">
        <ol class="mx-auto w-75 breadcrumb py-2 fs-6">
        <li class="breadcrumb-item">
          <a class="text-black link-underline link-underline-opacity-0 breadcrumb__item"
          href="<?php echo $path ?>user/home/homepage">Trang chủ</a></li>
        <li class="breadcrumb-item">
          <a class="text-black link-underline link-underline-opacity-0 breadcrumb__item"
          href="<?php echo $path ?>user/tour/tour_list/<?php echo $data['tour']['category_id'] ?>">
            <?php echo $data['category_name'] ?>
          </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $data['tour']['tour_name']; ?></li>
      </ol>
    </div>
    </nav>












<div class="container-fluid tour-detail">
        <div class="w-75 mx-auto mb-5">
            <h2 class="my-4 text-uppercase"><?php echo $data['tour']['tour_name'] ?></h2>
            <p class="fs-5 mb-1">Giá người lớn : <span class="text-danger"><?php echo $data['tour']['adult_price'] ?> đ</span></p>
            <p class="">Giá trẻ em (dưới 10 tuổi) : <span class="text-danger"><?php echo $data['tour']['child_price'] ?> đ</span></p>
            <div class="d-flex mb-4">
              <div class="p-0 my-auto text-center tour-detail__info">
                <i class="bi bi-calendar text-info fs-5"></i> <?php echo $data['tour']['tour_days'] ?>
              </div>
              <div class="p-0 my-auto text-center mx-5">
                <i class="bi bi-geo-alt text-info fs-5"></i> <?php echo $data['tour']['vehicle'] ?>
              </div>
              <div class="p-0 my-auto text-center">
                <i class="bi bi-house text-info fs-5"></i>
                <?php for ($i = 0; $i < $data['tour']['hotel_rate']; $i++) {?>
                  <i class="bi bi-star"></i>
                <?php }?>
              </div>
            </div>
            <div class="col-5">
              <a type="button" class="btn btn-primary" href="<?php echo $path ?>user/tour/booking/<?php echo $data['tour']['tour_id'] ?>">Đặt tour</a>
            </div>

            <nav class="pt-4">
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
                  role="tab" aria-controls="nav-home" aria-selected="true">Lịch trình</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
                  role="tab" aria-controls="nav-profile" aria-selected="false">Tổng quan</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button"
                  role="tab" aria-controls="nav-contact" aria-selected="false">Hình ảnh</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <h4 class="steelblue pt-3">Lịch trình tour</h4>
                <div class="detail-item">
                  <div class="d-flex">
                    <div class="col w-50">
                      <img class='m-3 w-95' src="<?php echo $data['tour']['map'] ?>" alt="">
                    </div>
                    <div class="col w-50 m-3">
                      <?php foreach ($data['schedule'] as $schedule) {?>
                      <div class="">
                        <h4>Ngày <?php echo $schedule['day'] ?> : <span class="ps-3 steelblue"><i class="bi bi-crosshair"></i> <?php echo $schedule['location'] ?></span> </h4>
                        <p class="ps-5"><?php echo $schedule['description'] ?></p>
                      </div>
                      <?php }?>
                    </div>
                  </div>

                </div>



              </div>

              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <h4 class="steelblue pt-3">Tổng quan về tour</h4>
                <p class="px-5"><?php echo $data['tour']['description'] ?></p>
                <div class="">
                  <p class="fw-semibold m-0">Tour bao gồm : </p>
                  <p class="ps-3"><?php echo $data['tour']['tour_include'] ?></p>
                </div>
                <div class="">
                  <p class="fw-semibold m-0">Tour không bao gồm : </p>
                  <p class="ps-3"><?php echo $data['tour']['tour_exclude'] ?></p>
                </div>
                <div class="">
                  <p class="fw-semibold m-0">Điều kiện trẻ em : </p>
                  <p class="ps-3"><?php echo $data['tour']['tour_condition'] ?>
                  </p>
                </div>
                <div class="">
                  <p class="fw-semibold m-0">Quy định hủy tour : </p>
                  <p class="ps-3"><?php echo $data['tour']['tour_cancel'] ?></p>
                </div>
              </div>

              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                <h4 class="steelblue pt-3">Hình ảnh về tour</h4>
                <div class="gallery w-100 mt-5">
        <div class="gallery__column">
            <a href="https://unsplash.com/@jeka_fe" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/_cvwXhGqG-o/300x300" alt="Portrait by Jessica Felicio" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Jessica Felicio</figcaption>
                </figure>
            </a>

            <a href="https://unsplash.com/@oladimeg" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/AHBvAIVqk64/300x500" alt="Portrait by Oladimeji Odunsi" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Oladimeji Odunsi</figcaption>
                </figure>
            </a>

            <a href="https://unsplash.com/@a2eorigins" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/VLPLo-GtrIE/300x300" alt="Portrait by Alex Perez" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Alex Perez</figcaption>
                </figure>
            </a>
        </div>

        <div class="gallery__column">
            <a href="https://unsplash.com/@hikiapp" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/A9rQeI2AdR4/300x300" alt="Portrait by Hikiapp" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Hikiapp</figcaption>
                </figure>
            </a>

            <a href="https://unsplash.com/@von_co" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/dnL6ZIpht2s/300x300" alt="Portrait by Ivana Cajina" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Ivana Cajina</figcaption>
                </figure>
            </a>

            <a href="https://unsplash.com/@j_erhunse" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/vp9mRauo68c/300x500" alt="Portrait by Jeffery Erhunse" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Jeffery Erhunse</figcaption>
                </figure>
            </a>
        </div>

        <div class="gallery__column">
            <a href="https://unsplash.com/@marilezhava" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/Xm9-vA_bhm0/300x500" alt="Portrait by Mari Lezhava" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Mari Lezhava</figcaption>
                </figure>
            </a>

            <a href="https://unsplash.com/@ethanhaddox" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/NTjSR3zYpsY/300x300" alt="Portrait by Ethan Haddox" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Ethan Haddox</figcaption>
                </figure>
            </a>

            <a href="https://unsplash.com/@mr_geshani" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/2JH8d3ChNec/300x300" alt="Portrait by Amir Geshani" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Amir Geshani</figcaption>
                </figure>
            </a>
        </div>

        <div class="gallery__column">
            <a href="https://unsplash.com/@nixcreative" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/sh3LSNbyj7k/300x300" alt="Portrait by Tyler Nix" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Tyler Nix</figcaption>
                </figure>
            </a>

            <a href="https://unsplash.com/@majestical_jasmin" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/OQd9zONSx7s/300x300" alt="Portrait by Jasmin Chew" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Jasmin Chew</figcaption>
                </figure>
            </a>

            <a href="https://unsplash.com/@dimadallacqua" target="_blank" class="gallery__link">
                <figure class="gallery__thumb">
                    <img src="https://source.unsplash.com/XZkEhowjx8k/300x500" alt="Portrait by Dima DallAcqua" class="gallery__image">
                    <figcaption class="gallery__caption">Portrait by Dima DallAcqua</figcaption>
                </figure>
            </a>
        </div>
    </div>
              </div>




            </div>


            <div class="bg-whitesmoke rounded-1 py-3 px-2 mt-5">
              <h4 class="steelblue">Bình luận/Đánh giá về tour</h4>
              <form class="mb-5" action="" method="post">
                <div class="d-flex form-row">
                  <div class="form-group col-md-4 p-2">
                    <label class="fw-semibold" for="inputName">Họ tên</label>
                    <input type="text" class="form-control" name="fullname" id="name" placeholder="Nhập tên">
                    <p class="text-danger">* <?php echo $data['fullname_err'] ?></p>
                  </div>
                  <div class="form-group col-md-4 p-2">
                    <label class="fw-semibold" for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
                    <p class="text-danger">* <?php echo $data['email_err'] ?></p>
                  </div>
                  <div class="form-group col-md-4 p-2">
                    <label class="fw-semibold" for="inputPhone">Số Điện Thoại</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Nhập số điện thoại" name="phone_number">
                    <p class="text-danger">* <?php echo $data['phone_number_err'] ?></p>
                  </div>
                </div>
                <div class="form-group p-2">
                  <label class="fw-semibold" for="inputComment">Bình Luận</label>
                  <textarea class="form-control" id="comment" rows="3" placeholder="Nhập bình luận" name="content"></textarea>
                  <p class="text-danger">* <?php echo $data['content_err'] ?></p>
                </div>
                <button type="submit" class="btn btn-primary m-2">Gửi</button>
              </form>

              <?php if ($data['comment']) {
    foreach ($data['comment'] as $comment) {?>
              <div class="pb-3">
                <p class="fw-semibold m-0"><?php echo $comment['fullname'] ?></p>
                <p class="timeline m-0"><?php echo $comment['time'] ?></p>
                <div class="bg-white rounded-1 mt-1 border">
                  <p class="ps-1 m-0"><?php echo $comment['content'] ?></p>
                  <?php if ($comment['response'] != '') {?>
                  <div class="ps-3 pt-1">
                    <p class="fw-semibold m-0">Admin</p>
                    <p class="m-0 pb-1"><?php echo $comment['response'] ?></p>
                  </div>
                  <?php }?>
                </div>
                </div>
                  <?php }} else {?>
                    <div class="">Chưa có bình luận/đánh giá về tour</div>
                  <?php }?>
            </div>
    </div>
</div>

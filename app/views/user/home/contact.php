<nav aria-label="breadcrumb">
    <div class="bg-body-secondary hide">
        <ol class="mx-auto w-75 breadcrumb py-2 fs-6">
        <li class="breadcrumb-item">
          <a class="text-black link-underline link-underline-opacity-0 breadcrumb__item"
          href="<?php echo $path ?>user/home/homepage">Trang chủ</a></li>
        <li class="breadcrumb-item active">
          Liên hệ
          </li>
      </ol>
    </div>
    </nav>

<div class="m-4">
    <div class="container p-4 d-flex justify-content-between">
        <div class="left__contact p-4">
            <div class="title_main_page w-100">
                <h2 class="title-head mb-4">Thông tin liên hệ</h2>
                <div class="main-contact">
                    <p>
                        <span style="line-height:2.0;">Điện thoại : <?php echo $data['general']['phone_number'] ?><br>
                            Hotline : <?php echo $data['general']['hotline'] ?></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="right__contact p-4 w-50">
            <div class="title_main_page">
                <h2 class="title-head mb-4">Liên hệ chúng tôi</h2>
                <form class="d-flex flex-column gap-4" method="post">
                    <div class="row">
                        <div class="col">
                            <input name="fullname" type="text" class="form-control" placeholder="Họ tên" required>
                        </div>
                        <div class="col">
                            <input name="address" type="text" class="form-control" placeholder="Địa chỉ" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input name="phone" type="text" class="form-control" placeholder="Điện thoại" required>
                        </div>
                        <div class="col">
                            <input name="email" type="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
<<<<<<< HEAD
                            <textarea name="description" placeholder="Mô tả" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
=======
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" required placeholder="Mô tả"></textarea>
>>>>>>> 543507854785a6186014509ebc72aeb6a65e8362
                        </div>
                    </div>
                    <div class="row">
                            <button class="btn btn-dark" type="submit"> GỬI THÔNG TIN LIÊN HỆ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



</div>
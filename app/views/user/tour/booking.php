<nav aria-label="breadcrumb">
    <div class="bg-body-secondary hide">
        <ol class="mx-auto w-75 breadcrumb py-2 fs-6">
        <li class="breadcrumb-item">
          <a class="text-black link-underline link-underline-opacity-0 breadcrumb__item"
          href="<?php echo $path ?>user/home/homepage">Trang chủ</a></li>
        <li class="breadcrumb-item">
          <a class="text-black link-underline link-underline-opacity-0 breadcrumb__item"
          href="<?php echo $path ?>user/tour/tour_detail/<?php echo $data['tour']['tour_id'] ?>">
            <?php echo $data['tour']['tour_name'] ?>
          </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Đặt tour</li>
      </ol>
    </div>
    </nav>




<div class="container-fluid booking">
        <div class="w-75 mx-auto mb-5">
          <h2 class="text-center my-4 text-uppercase">Đặt tour</h2>
          <form class="d-lg-flex" method="post" action="<?php echo $path ?>user/tour/booking/<?php echo $data['tour']['tour_id'] ?><?php if (isset($user_id)) {echo '/' . $user_id;}?>">
            <div class="col-lg-8 m-2 border border-primary rounded-4 p-0">
              <h5 class="text-uppercase bg-primary text-white rounded-top-4 p-2">Dịch vụ tour</h5>
              <div class="mb-3">
                <div class="form-group p-2">
                  <label class="fw-semibold" for="inputComment">Tên tour</label>
                  <input type="text" class="form-control" id="inputName" value="<?php echo $data['tour']['tour_name'] ?>" disabled>
                </div>
                <div class="d-md-flex form-row">
                  <div class="form-group col-md-4 p-2">
                    <label class="fw-semibold" for="inputName">Số ngày đi tour</label>
                    <input type="text" class="form-control" id="inputName" value="<?php echo $data['tour']['tour_days'] ?>" disabled>
                  </div>
                  <div class="form-group col-md-4 p-2">
                    <label class="fw-semibold" for="inputEmail">Phương tiện</label>
                    <input type="email" class="form-control" id="inputEmail" value="<?php echo $data['tour']['vehicle'] ?>" disabled>
                  </div>
                  <div class="form-group col-md-4 p-2">
                    <label class="fw-semibold" for="inputPhone">Khách sạn</label>
                    <input type="tel" class="form-control" id="inputPhone" value="<?php echo $data['tour']['hotel_rate'] ?> sao" disabled>
                  </div>
                </div>
                <div class="d-lg-flex form-row p-2">
                  <div class="col-lg-6 p-2 form-group d-flex">
                    <label class="fw-semibold my-auto me-2" for="inputName">Số lượng người lớn</label>
                    <input name="adult_count" type="number" class="form-control w-25" id="adult_count" value="1" min="1">
                  </div>
                  <div class="col-lg-6 p-2 form-group d-flex">
                    <label class="fw-semibold my-auto me-2" for="inputEmail">Số lượng trẻ em</label>
                    <input name="child_count" type="number" class="form-control w-25 me-2" id="child_count" value="0" min="0">
                    <p class="text-danger my-auto">(dưới 10 tuổi)</p>
                  </div>
                </div>
                <div class="d-md-flex form-row p-2">
                  <div class="col-md-6 p-2 form-group d-flex">
                    <label class="fw-semibold my-auto me-2" for="inputName">Giá người lớn : </label>
                    <p class="text-primary fw-semibold my-auto" id="adult_price" value="<?php echo $data['tour']['adult_price'] ?>"></p>
                  </div>
                  <div class="col-md-6 p-2 form-group d-flex">
                    <label class="fw-semibold my-auto me-2" for="inputEmail">Giá trẻ em : </label>
                    <p class="text-primary fw-semibold my-auto" id="child_price" value="<?php echo $data['tour']['child_price'] ?>"><?php echo $data['tour']['child_price'] ?> đ</p>
                  </div>
                </div>
                <div class="d-lg-flex form-row p-2">
                  <div class="col-lg-6 p-2 form-group d-flex">
                    <label class="fw-semibold my-auto me-2" for="inputName">Chọn ngày khởi hành</label>
                    <input required name="depart_date" type="date" class="form-control w-50" id="inputName" value="" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>">
                  </div>
                  <div class="col-lg-6 p-2 form-group d-flex justify-content-end">
                    <label class="fw-semibold my-auto me-2 fs-5" for="inputEmail">Tổng giá : </label>
                    <p class="text-danger fw-semibold my-auto fs-5" id="total_price"></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 m-2 border border-warning rounded-4 p-0">
              <h5 class="text-uppercase bg-warning text-white rounded-top-4 p-2">Thông tin liên lạc</h5>
              <div>
                <div class="input-group">
                  <input type="text" class="form-control m-2" placeholder="Họ tên" aria-label="Recipient's username"
                    aria-describedby="button-addon2" name="fullname">
                </div>
                <p class="text-danger ps-2"><?php echo $data['fullname_err'] ?></p>
                <div class="input-group">
                  <input type="text" class="form-control m-2" placeholder="Số điện thoại" aria-label="Recipient's username"
                    aria-describedby="button-addon2" name="phone_number">
                </div>
                <p class="text-danger ps-2"><?php echo $data['phone_number_err'] ?></p>
                <div class="input-group">
                  <input type="text" class="form-control m-2" placeholder="Email" aria-label="Recipient's username"
                    aria-describedby="button-addon2" name="email">
                </div>
                <p class="text-danger ps-2"><?php echo $data['email_err'] ?></p>
                <div class="input-group">
                  <textarea name="address" class="form-control m-2" cols="10" rows="4" placeholder="Địa chỉ"></textarea><br>
                </div>
                <p class="text-danger ps-2"><?php echo $data['address_err'] ?></p>
                <div class="my-3 text-center">
                  <button class="btn btn-warning w-75 text-white" type="submit">Đặt tour</button>
                </div>
              </div>
            </div>
          </form>
        </div>
</div>

<div style="<?php if ($data['isSuccess']) {
    echo 'display:block;';}?>" class="modal" tabindex="-1" id="success-booking" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Đặt tour thành công</h5>
      </div>
      <div class="modal-body">
        <p>Cảm ơn vì đã chọn CodeTour</p>
      </div>
      <div class="modal-footer mx-auto">
        <a href="<?php echo $path ?>user/home/homepage" type="button" class="btn btn-primary">Về trang chủ</a>
      </div>
    </div>
  </div>
</div>
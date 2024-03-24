<nav aria-label="breadcrumb">
    <div class="bg-body-secondary hide">
        <ol class="mx-auto w-75 breadcrumb py-2 fs-6">
        <li class="breadcrumb-item">
          <a class="text-black link-underline link-underline-opacity-0 breadcrumb__item"
          href="<?php echo $path ?>user/home/homepage">Trang chủ</a></li>
        <li class="breadcrumb-item active">
          Tài khoản
          </li>
      </ol>
    </div>
    </nav>


<div class="container m-auto w-100 my-5">
    <div class="account__information ">
        <div class="account__information-title d-flex justify-content-center">
            <h2 class="fw-bold">QUẢN LÝ TOUR CỦA BẠN</h2>
        </div>
        <div class="account__information-detail border rounded d-flex justify-content-between align-items-start mt-2 ">
            <div class="user d-flex flex-column justify-content-center p-5 w-25">
                <div class="user__avatar d-flex align-items-center flex-column justify-center text-center">
                    <img class="w-100" src="https://static.vecteezy.com/system/resources/previews/013/042/571/original/default-avatar-profile-icon-social-media-user-photo-in-flat-style-vector.jpg">
                    <h3>Xin chào</h3>
                </div>
                <div class="user__menu mt-3 d-flex flex-column justify-content-center">
                    <li>
                        <i class="bi bi-person"></i>
                        <a href="<?php echo $path ?>user/account">Thông tin tài khoản</a>
                    </li>
                    <li>
                        <i class="bi bi-menu-button-wide"></i>
                        <a href="<?php echo $path ?>user/account/manage">Tour của bạn</a>
                    </li>
                    <li>
                        <i class="bi bi-map"></i>
                        <a href="<?php echo $path ?>user/account/changepass">Đổi mật khẩu</a>
                    </li>

                    <li>
                        <i class="bi bi-box-arrow-in-right"></i>
                        <a href="<?php echo $path ?>user/account/logout">Đăng xuất</a>
                    </li>
                </div>
            </div>
            <div class="user__infor flex-fill bd-highligh p-3 d-flex flex-column justify-content-center align-items-center w-75">
                <div class="user__infor-detail w-100 d-flex flex-column justify-content-center align-items-center">
                    <h3>Tour của bạn</h3>
                    <table class="table table-striped table-bordered">
                        <input type="hidden" id="userid" name="userid">
                        <thead>
                            <tr>
                                <th scope="col">Tên Tour</th>
                                <th scope="col">Ngày Booking</th>
                                <th scope="col">Ngày khởi hành</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Xem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
if ($data['booking']) {
    while ($row = mysqli_fetch_assoc($data['booking'])) {

        // var_dump($row);

        ?>
                                    <tr>
                                        <td><?=$row['tour_name']?></td>
                                        <td><?=$row['created_datetime']?></td>
                                        <td><?=$row['depart_date']?></td>
                                        <?php
if ($row['status'] == 0):
        ?>
                                            <td class="text-warning">
                                                Đang xử lý
                                            </td>
                                        <?php elseif ($row['status'] == 1): ?>
                                            <td class="text-primary">
                                                Đã xác nhận
                                            </td>
                                        <?php elseif ($row['status'] == 2): ?>
                                            <td class="text-success">
                                                Đã hoàn thành
                                            </td>
                                        <?php elseif ($row['status'] == 3): ?>
                                            <td class="text-danger">
                                                Đã hủy
                                            </td>
                                        <?php endif?>
                                        <td><?=$row['total_money']?></td>
                                        <td class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-success w-100 detail-order" data-bs-toggle="modal" data-bs-target="#exampleModal" data-order-id="<?=$row['booking_id']?>">
                                                XEM
                                            </button>
                                        </td>
                                    </tr>
                            <?php
}
}?>
                        </tbody>
                    </table>
                    <?php
if (!$data['booking']) {
    ?>
                        <p class="text-2xl text-center fw-bold"> Bạn chưa đặt tour nào cả</p>
                    <?php }?>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog d-flex align-items-center justify-content-center" id="modal-dialog-user">
                        <div class="modal-content" id="modal-user">


                            <!-- <div class="bill-title d-flex justify-content-between align-items-center m-2">
                                    <div class="user__infor-detail w-100 d-flex gap-2 flex-column">
                                        <div class="title">
                                            <p>Họ và tên:</p>
                                            <span>Nguyễn Trương Phước Thọ</span>
                                        </div>
                                        <div class="title">
                                            <p>Email:</p>
                                            <span>abc9@gmail.com</span>
                                        </div>
                                        <div class="title">
                                            <p>Địa chỉ:</p>
                                            <span>123 Trần Hưng Đạo, Hội Phú, Đà Nẵng</span>
                                        </div>
                                        <div class="title">
                                            <p>Điện thoại:</p>
                                            <span>0987 654 321</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="bill__description">
                                    <div class="bill__description-date d-flex justify-content-around my-3">
                                        <div class="title">
                                            <p>Ngày Booking: <span>15/05/2025</span> </p>
                                        </div>
                                        <div class="title">
                                            <p>Ngày khởi hành: <span>15/05/2025</span> </p>
                                        </div>
                                        <div class="title">
                                            <p>Trạng thái <span class="text-warning">Đang xác nhận</span> </p>
                                        </div>
                                    </div>
                                    <div class="bill__description-title">
                                        <div class="title d-flex justify-content-between">
                                            <h4>THÔNG TIN CHUYẾN ĐI</h4>
                                        </div>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">#TourName</th>
                                                    <th scope="col">Người lớn</th>
                                                    <th scope="col">Trẻ em</th>
                                                    <th scope="col">Tổng tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Thượng đình x9x1-456</td>
                                                    <td>1</td>
                                                    <td>123.239đ</td>
                                                    <td>123.239đ</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="bill__description d-flex justify-content-between p-3">
                                            <div class="bill__total d-flex align-items-center gap-3">
                                                <h4>Cần thanh toán</h4>
                                                <h6 class="text-danger">1.123.456đ</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function() {

        $('.detail-order').click(function() {

            var orderid = $(this).data('order-id');
            // var userid = $('#userid').val();
            // AJAX request
            $.ajax({
                url: `logic`,
                type: 'post',
                data: {
                    // userid: userid,
                    orderid: orderid,
                },
                success: function(response) {
                    // Add response in Modal body
                    console.log(response);
                    $('.modal-content').html(response);

                    // Display Modal
                    $('#exampleModal').modal('show');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
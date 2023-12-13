<div class="container m-auto w-100 my-5">
    <div class="account__information ">
        <div class="account__information-title d-flex justify-content-center">
            <h2 class="fw-bold">THÔNG TIN CÁ NHÂN</h2>
        </div>
        <div class="account__information-detail border rounded d-flex justify-content-between align-items-center mt-2 ">
            <div class="user d-flex flex-column justify-content-center p-5 w-25">
                <div class="user__avatar d-flex align-items-center flex-column justify-center text-center">
                    <img class="w-100" src="https://static.vecteezy.com/system/resources/previews/013/042/571/original/default-avatar-profile-icon-social-media-user-photo-in-flat-style-vector.jpg">
                    <h3>Xin chào</h3>
                </div>
                <div class="user__menu mt-3 d-flex flex-column justify-content-center align-items-center">
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

            <div class="user__infor bd-highligh gap-5 p-3 d-flex flex-column justify-content-center align-items-center w-75">
                <div class="user__infor-detail d-flex gap-2 flex-column w-100 justify-content-center align-items-center">
                    <div class="title">
                        <p>Họ và tên:</p>

                        <?php if (isset($data['user']['fullname'])) : ?>
                            <p><?= $data['user']['fullname'] ?></p>
                        <?php else : ?>
                            <p class='text-danger'>Bạn cần cập nhật họ và tên</p>
                        <?php endif ?>
                    </div>
                    <div class="title">
                        <p>Email:</p>
                        <?php if (isset($data['user']['email'])) : ?>
                            <p><?= $data['user']['email'] ?></p>
                        <?php else : ?>
                            <p class='text-danger'>Bạn cần cập nhật Email</p>
                        <?php endif ?>
                    </div>
                    <div class="title">
                        <p>Địa chỉ:</p>
                        <?php if (isset($data['address']['address'])) : ?>
                            <p><?= $data['address']['address'] ?></p>
                        <?php else : ?>
                            <p class='text-danger'>Bạn cần cập nhật Địa chỉ</p>
                        <?php endif ?>
                    </div>
                    
                    <div class="title">
                        <p>Điện thoại</p>
                        <?php if (isset($data['user']['phone_number'])) : ?>
                            <p><?= $data['user']['phone_number'] ?></p>
                        <?php else : ?>
                            <p class='text-danger'>Bạn cần cập nhật số điện thoại</p>
                        <?php endif ?>
                    </div>
                </div>
                <div class="user__infor-btn mt-3">
                    <a href="<?php echo $path ?>user/account/update">
                        <button type="button" class="btn btn-primary">CẬP NHẬP THÔNG TIN TÀI KHOẢN</button>
                    </a>
                </div>

            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog d-flex align-items-center justify-content-center" id="modal-dialog-user">
                    <div class="modal-content" id="modal-user">
                        <!-- <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    Đơn hàng <span>#123465</span>
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="bill-title d-flex justify-content-between align-items-center">
                                    <div class="user__infor-detail w-75">
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
                                    <div class="user__avatar">
                                        <img src="img/avatar9.jpg" class="bill-ava">
                                    </div>
                                </div>
                                <div class="bill__description">
                                    <div class="bill__description-date d-flex justify-content-around">
                                        <div class="title">
                                            <p>Ngày đặt: <span>15/05/2025</span> </p>
                                        </div>
                                        <div class="title">
                                            <p>Mã hóa đơn: <span>#123456</span> </p>
                                        </div>
                                        <div class="title">
                                            <p>Trạng thái <span class="text-warning">Đang xác nhận</span> </p>
                                        </div>
                                    </div>
                                    <div class="bill__description-title">
                                        <div class="title d-flex justify-content-between">
                                            <h4>THÔNG TIN SẢN PHẨM</h4>

                                        </div>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Tên</th>
                                                    <th scope="col">Số lượng</th>
                                                    <th scope="col">Giá</th>
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
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Thượng đình x9x1-456</td>
                                                    <td>1</td>
                                                    <td>123.239đ</td>
                                                    <td>123.239đ</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Thượng đình x9x1-456</td>
                                                    <td>1</td>
                                                    <td>123.239đ</td>
                                                    <td>123.239đ</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="bill__description d-flex justify-content-between p-3">
                                            <div class="bill__payment">
                                                <div class="bill__payment-ti">
                                                    <i class="bi bi-credit-card"></i>
                                                    Hình thức thanh toán
                                                </div>
                                                <h6>Thanh toán khi nhận hàng</h6>
                                            </div>
                                            <div class="bill__total d-flex align-items-center gap-3">
                                                <h4>Cần thanh toán</h4>
                                                <h6 class="text-danger">1.123.456đ</h6>
                                            </div>
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
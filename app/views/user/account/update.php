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
                <div class="user__infor-detail">
                    <form action="#" id="update__form" method="post">
                        <div class="form-floating">
                            <input name="fullname" type="text" id="full-name" value="<?= $data['user']['fullname'] ?? null?>"
                            class="form-control mb-2  w-100" placeholder="Họ và tên">
                            <label for="full-name">Họ và tên<label>
                        </div>
                        <!-- <div class="form-floating">
                            <input name="date" type="date" id="full-name" value="<?= $data['user']['date'] ?? null?>"
                            class="form-control mb-2  w-100">
                            <label for="birthday">Ngày tháng năm sinh</label>
                        </div> -->
                        <div id="user-info__select-location">

                            <div class="form-floating">
                                <input name="detail" type="text" value="<?= $data['user']['address'] ?? null?>"
                                class="form-control mb-2 w-100" id="address" placeholder="Số nhà, đường,...">
                                <label for="address">Địa chỉ hiện tại</label>
                            </div>
                        </div>
                        <div class="form-floating">
                            <input name="phone" type="text" id="phone-number" value="<?= $data['user']['phone_number'] ?? null?>"
                            class="form-control mb-2 w-100" placeholder="Số điện thoại">
                            <label for="phone-number">Số điện thoại</label>
                        </div>
                        <div class="user__infor-btn mt-3">

                            <button type="submit" class="btn btn-primary" name="update">CẬP NHẬP THÔNG TIN TÀI KHOẢN</button>

                        </div>
                        
                        <input type="hidden" name='id'>
                    </form>
                    
                </div>

            </div>


            
        </div>
    </div>
</div>
</div>
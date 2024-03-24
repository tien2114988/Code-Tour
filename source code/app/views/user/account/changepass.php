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
            <h2 class="fw-bold">CẬP NHẬP MẬT KHẨU</h2>
        </div>
        <div class="account__information-detail border rounded d-flex justify-content-between align-items-center mt-2 ">
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

            <div class="user__infor bd-highligh gap-5 p-3 d-flex flex-column justify-content-center align-items-center ms-3 w-75">
                <div class="user__infor-detail">
                    <form action="#" id="update__form" method="post" class="d-flex flex-column ms-5 justify-content-between form__group1 px-5">
                        <div class="form-group1 mb-2">
                            <div class="w-100 d-flex flex-column">
                                <label class="w-25 mb-2 fw-bold ">Mật khẩu cũ:</label>
                                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                    <input type="password" name="password" id="password1" class="w-75 form-field1" required />
                                    <i class="bi bi-eye-slash w-25" id="togglePassword1"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group1 mb-2">
                            <div class="w-100 d-flex flex-column">
                                <label class="w-25 mb-2 fw-bold ">Mật khẩu mới:</label>
                                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                    <input type="password" name="npassword" id="password2" class="w-75 form-field1" required />
                                    <i class="bi bi-eye-slash w-25" id="togglePassword2"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group1 mb-2">
                            <div class="w-100 d-flex flex-column">
                                <label class="w-25 mb-2 fw-bold ">Nhập lại mật khẩu mới:</label>
                                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                    <input type="password" name="cpassword" id="password3" class="w-75 form-field1" required />
                                    <i class="bi bi-eye-slash w-25" id="togglePassword3"></i>
                                </div>
                            </div>
                        </div>

                        <div class="user__infor-btn">
                            <button type="submit" class="btn btn-primary" name="update">CẬP NHẬP MẬT KHẨU</button>
                        </div>

                        <input type="hidden" name='id'>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
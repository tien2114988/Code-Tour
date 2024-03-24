<div class="bg-whitesmoke py-3">
  <div class="container-fluid row w-75 mx-auto">
    <div class="col-md-6 pb-5 pb-md-0">
      <h5 class="fs-6">THÔNG TIN LIÊN HỆ</h5>
      <ul class="list-group list-unstyled">
        <li><span class="fw-semibold">Địa chỉ : </span><?php echo $data['general']['address'] ?></li>
        <li><span class="fw-semibold">Điện thoại : </span><?php echo $data['general']['phone_number'] ?> </li>
        <li><span class="fw-semibold">Hotline : </span><?php echo $data['general']['hotline'] ?></li>
        <li><span class="fw-semibold">Email : </span><?php echo $data['general']['email'] ?></li>
      </ul>
    </div>
    <div class="col-md-6">
      <h5 class="fs-6">THÔNG TIN CHUYỂN KHOẢN</h5>
      <ul class="list-group list-unstyled">
        <li><span class="fw-semibold">Chủ tài khoản : </span><?php echo $data['general']['transfer_name'] ?></li>
        <li><span class="fw-semibold">STK : </span><?php echo $data['general']['account_number'] ?></li>
        <li><span class="fw-semibold">Ngân hàng : </span><?php echo $data['general']['bank_name'] ?></li>
      </ul>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="<?php echo $path ?>/js/user.js"></script>
<script src="<?php echo $path ?>/js/tour_news.js"> </script>
</body>

</html>

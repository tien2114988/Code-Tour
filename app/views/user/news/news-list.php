
<nav aria-label="breadcrumb">
    <div class="bg-body-secondary hide">
        <ol class="mx-auto w-75 breadcrumb py-2 fs-6">
        <li class="breadcrumb-item">
          <a class="text-black link-underline link-underline-opacity-0 breadcrumb__item"
          href="<?php echo $path ?>user/home/homepage">Trang chủ</a></li>
        <li class="breadcrumb-item active">
          Tin tức
          </li>
      </ol>
    </div>
    </nav>



<div class="container-fluid news-list">
        <div class="w-75 mx-auto mb-5">
            <h2 class="text-center my-4 text-uppercase"><?php echo $data['heading'] ?></h2>




            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-3 g-4 mt-5">
                <?php if ($data['news']) {
    foreach ($data['news'] as $news) {?>
                <a class="item-list__card-link px-3 link-underline link-underline-opacity-0"  href="<?php echo $path ?>user/news/news_detail/<?php echo $news['news_id'] ?>">
                    <div class="item-list__card card col p-0 h-100">
                        <img src="<?php echo $news['news_img'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-5 fw-semibold text-center"><?php echo $news['title'] ?></p>
                            <p class="card-text"><?php echo $news['opening_paragraph'] ?></p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-secondary rounded-4">Xem thêm</button>
                            </div>
                        </div>
                    </div>
                </a>
                <?php }?>
                  <nav class="w-100 p-5 d-flex justify-content-end" aria-label="...">
                  <ul class="pagination">

                    <li class="page-item <?php if ($data['currentPage'] == 1) {echo "disabled";}?>">
                      <a href="<?php echo $path ?>user/news/news_list/<?php echo $data['currentPage'] - 1 ?>/<?php echo $data['search'] ?>" class="page-link">Previous</a>
                    </li>

                    <?php for ($i = 1; $i <= $data['maxPage']; $i++) {?>
                    <li <?php if ($data['currentPage'] == 1) {echo "disabled";}?> class="page-item <?php if ($i == $data['currentPage']) {echo 'active';}?>" aria-current="page">
                      <a <?php if ($i != $data['currentPage']) {?> href="<?php echo $path ?>user/news/news_list/<?php echo $i ?>/<?php echo $data['search'] ?>" <?php }?> class="page-link"><?php echo $i ?></a>
                    </li>
                    <?php }?>

                    <li class="page-item <?php if ($data['currentPage'] == $data['maxPage']) {echo "disabled";}?>">
                      <a href="<?php echo $path ?>user/news/news_list/<?php echo $data['currentPage'] + 1 ?>/<?php echo $data['search'] ?>" class="page-link">Next</a>
                    </li>
                  </ul>
                </nav>
                <?php } else {?>
                <div class="pb-5">Không tìm thấy kết quả phù hợp</div>
                <?php }?>
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

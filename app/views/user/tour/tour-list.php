






<div class="container-fluid">
        <div class="w-75 mx-auto mb-5">
            <h2 class="text-center my-4 text-uppercase"><?php echo $data['category_name'] ?></h2>




            <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
              <?php if ($data['tour']) {
    foreach ($data['tour'] as $tour) {?>
                <div class="item-list__card-link px-3">
                    <div class="item-list__card card col p-0 h-100">
                        <img src="<?php echo $tour['avatar'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="<?php echo $path ?>user/tour/tour_detail/<?php echo $tour['tour_id'] ?>" class="card-title fs-5 fw-semibold link-underline link-underline-opacity-0"><?php echo $tour['tour_name'] ?></a>
                            <p class="card-text">Giá : <span class="text-danger"><?php echo $tour['adult_price'] ?> đ</span></p>
                            <div class="row">
                              <div class="col-5">
                                <a type="button" href='<?php echo $path ?>user/tour/booking/<?php echo $tour['tour_id'] ?>' class="btn btn-primary">Đặt tour</a>
                              </div>
                              <div class="col p-0 my-auto text-center">
                                <i class="bi bi-bag-check"></i> <?php echo $tour['booking_count'] ?>
                              </div>
                              <div class="col p-0 my-auto text-center">
                                <i class="bi bi-eye"></i> <?php echo $tour['view_count'] ?>
                              </div>
                              <div class="col p-0 my-auto text-center">
                                <i class="bi bi-chat"></i> <?php echo $tour['comment_count'] ?>
                              </div>
                            </div>
                        </div>


                    </div>
                </div>


              <?php }?>
              <nav class="w-100 p-5 d-flex justify-content-end" aria-label="...">
                  <ul class="pagination">

                    <li class="page-item <?php if ($data['currentPage'] == 1) {echo "disabled";}?>">
                      <a href="<?php echo $path ?>user/tour/tour_list/<?php echo $data['category_id'] ?>/<?php echo $data['currentPage'] - 1 ?>/<?php echo $data['search'] ?>" class="page-link">Previous</a>
                    </li>


                    <?php for ($i = 1; $i <= $data['maxPage']; $i++) {?>
                    <li class="page-item <?php if ($i == $data['currentPage']) {echo 'active';}?>" aria-current="page">
                      <a <?php if ($i != $data['currentPage']) {?> href="<?php echo $path ?>user/tour/tour_list/<?php echo $data['category_id'] ?>/<?php echo $i ?>/<?php echo $data['search'] ?>" <?php }?> class="page-link"><?php echo $i ?></a>
                    </li>
                    <?php }?>

                    <li class="page-item <?php if ($data['currentPage'] == $data['maxPage']) {echo "disabled";}?>">
                      <a href="<?php echo $path ?>user/tour/tour_list/<?php echo $data['category_id'] ?>/<?php echo $data['currentPage'] + 1 ?>/<?php echo $data['search'] ?>" class="page-link">Next</a>
                    </li>
                  </ul>
                </nav>
            <?php } else {?>
                <div class="pb-5">Không tìm thấy kết quả phù hợp</div>
              <?php }?>
            </div>
    </div>
</div>

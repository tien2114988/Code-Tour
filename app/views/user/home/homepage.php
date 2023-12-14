<div>
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-row w-100">
            <div class="slide d-flex align-items-center justify-content-start w-100">
                <div class="slide__information p-4 mx-5 d-flex gap-2 flex-column px-lg-5">
                    <h5 class="text-uppercase lineUp">TOUR MIỀN TÂY 3 NGÀY 2 ĐÊM</h5>
                    <h6 class="text-uppercase lineDown">TIỀN GIANG - BẾN TRE - CẦN THƠ</h6>
                    <p class="lineLeft">Giá: 1.980.000 VNĐ </p>
                    <button class="primary-button w-25 lineRight ">ĐẶT NGAY</button>
                </div>
            </div>
            <!-- <div class="slide d-flex align-items-center justify-content-start">
            <div class="slide__information p-4 mx-5 d-flex gap-2 flex-column px-lg-5">
                <h5 class="text-uppercase lineUp">TOUR MIỀN TÂY 3 NGÀY 2 ĐÊM</h5>
                <h6 class="text-uppercase lineDown">TIỀN GIANG - BẾN TRE - CẦN THƠ</h6>
                <p class="lineLeft">Giá: 1.980.000 VNĐ </p>
                <button class="primary-button w-25 lineRight ">ĐẶT NGAY</button>
            </div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
        </div>
    </div>


    <div class="a_feature my-4">
        <div class="d-flex justify-content-center feature__container flex-column align-items-center gap-1 w-100">
            <h3 class="text-uppercase text-center">Tour nổi bật trong tháng</h3>
            <div class="feature__img d-flex flex-row flex-wrap p-4 w-100 justify-content-between">
                <?php
                foreach ($data['tour_feature'] as $row) {
                    // var_dump($row);

                ?>
                    <div class="container__item d-flex flex-1 justify-content-center align-items-end">
                        <img src="<?= $row['avatar'] ?>" alt="photo">
                        <div class="feature d-flex flex-column align-items-center p-3">
                            <h6 class="text-uppercase text-center"><?= $row['tour_name'] ?></h6>
                            <!-- <h7 class="text-uppercase">Tạt mươn bắt cá</h7> -->
                            <p><span class="text-uppercase">Giá </span><?= $row['adult_price'] ?> VNĐ</p>
                            <a href="<?= $path ?>user/tour/tour_detail/<?= $row['tour_id'] ?>"><button class="primary-button">ĐẶT NGAY</button></a>
                        </div>
                    </div>
                <?php
                }
                ?>
                <!-- <div class="container__item d-flex flex-1 justify-content-center align-items-end">
                    <img src="https://tourbonphuong.com/upload/hinhanh/088071186413254_750x500.jpg" alt="photo">
                    <div class="feature d-flex flex-column align-items-center p-3">
                        <h6 class="text-uppercase text-center">MIỀN TÂY TRONG NGÀY</h6>
                        <h7 class="text-uppercase">Tạt mươn bắt cá</h7>
                        <p><span class="text-uppercase">Giá</span> 450.000 VNĐ</p>
                        <button class="primary-button">ĐẶT NGAY</button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <div class="tour__main w-100 p-1">

        <h3 class="text-uppercase text-center">tour chính</h3>
        <div class="tour__main-container d-flex w-100">
            <?php
            for ($i = 0; $i < count($data['tour_five']);) {
                //var_dump($data['tour_five']);
                //exit();
            ?>
                <div class="tour__main-left w-50 flex-1">
                    <div class="tour__infor d-flex flex-column w-50 align-items-center justify-content-center">
                        <h6 class="text-uppercase text-center text"><?= $data['tour_five'][$i]['tour_name'] ?></h6>
                        <h7 class="text-uppercase text-center text"><?= $data['tour_five'][$i]['location'] ?></h7>
                        <p><span class="fw-bold">Giá: </span> <?= $data['tour_five'][$i]['adult_price'] ?>VNĐ</p>
                        <button class="primary-button">ĐẶT NGAY</button>
                    </div>
                    <img src="<?= $data['tour_five'][$i]['avatar'] ?>" class="w-100" alt="photo">
                </div>
            <?php

                break;
            }
            ?>

            <div class="tour__main-right w-50 flex-1 d-flex flex-wrap">
                <div class="tour__main-row d-flex flex-row h-50">
                    <?php
                    for ($i = 1; $i <= 2; $i++) {
                    ?>
                        <div class="tour__main-sub flex-1">
                            <img src="<?= $data['tour_five'][$i]['avatar'] ?>" alt="photo">
                            <div class="tour__infor_mini d-flex flex-column justify-items-center">
                                <h6 class="text-uppercase text"><?= $data['tour_five'][$i]['tour_name'] ?></h6>
                                <h7 class="text-uppercase text"><?= $data['tour_five'][$i]['location'] ?></h7>
                                <p><span class="fw-bold">Giá:</span> <?= $data['tour_five'][$i]['adult_price'] ?>VNĐ</p>
                                <button class="primary-button">ĐẶT NGAY</button>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
                <div class="tour__main-row d-flex flex-row h-50">
                    <?php
                    for ($i = 3; $i <= 4; $i++) {
                    ?>
                        <div class="tour__main-sub flex-1">
                            <img src="<?= $data['tour_five'][$i]['avatar'] ?>" alt="photo">
                            <div class="tour__infor_mini d-flex flex-column justify-items-center">
                                <h6 class="text-uppercase text"><?= $data['tour_five'][$i]['tour_name'] ?></h6>
                                <h7 class="text-uppercase text"><?= $data['tour_five'][$i]['location'] ?></h7>
                                <p><span class="fw-bold">Giá:</span> <?= $data['tour_five'][$i]['adult_price'] ?>VNĐ</p>
                                <button class="primary-button">ĐẶT NGAY</button>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>

        </div>

    </div>

    <div class="tour__list p-5 w-100">
        <h3 class="text-uppercase text-center"> danh sách tour</h3>
        <div class="tour__list-container d-flex justify-content-between">
            <?php
            foreach ($data['sub_cate'] as $row) {

            ?>
                <div class="tour__item p-2">
                    <div class="tour__item-infor p-2 d-flex flex-column">
                        <h7 class="text-uppercase text"><?= $row['category_name'] ?></h7>
                        <p><span><?= $row['count_tour'] ?></span> Tour</p>
                    </div>
                    <a href="<?php echo $path ?>user/tour/tour_list/<?= $row['category_id'] ?>">
                        <img class="w-100" src="<?= $row['category_img'] ?>">
                    </a>
                </div>
            <?php
            }
            ?>

        </div>
    </div>

    <div class="tour__blog m-5">
        <h3 class="text-uppercase text-center">Tin tức</h3>

        <div class="blog__container d-flex p-5 justify-content-between gap-2 align-items-center">
            <?php
            foreach ($data['news'] as $row) {

            ?>
                <div class="blog__left">
                    <div class="blog__infor d-flex flex-column p-4 align-items-center">
                        <h6 class="text-uppercase text"><?= $row['title'] ?></h6>
                        <p class="text"><?= $row['opening_paragraph'] ?></p>
                        <a href="<?= $path ?>user/news/news_detail/<?= $row['news_id'] ?>"> <button class="primary-button">Đọc thêm</button>
                        </a>
                    </div>

                        <img src="<?= $row['news_img'] ?>" alt="photo">
                    </a>
                </div>
            <?php
            } ?>
        </div>
    </div>
</div>
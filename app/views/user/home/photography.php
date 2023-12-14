<div class="introduce bg-secondary px-5 py-1 mt-2">
    <h4 class="p-0 m-0 text-2xl">
        <a href="" class="text-white">Trang chủ</a>
        <span><i class="bi bi-caret-right-fill"></i></span>
        <a href="" class="text-white">Hình ảnh</a>
    </h4>
</div>
<div class="container py-5">
    <div class="image__heading">
        <h3 class="text-center image__heading-title">Hình ảnh</h3>
    </div>
    <div class="gallery w-100 mt-5">
        <?php
        //var_dump($data['imgs'][1]);
        //exit();
        ?>
        <?php
        $j;
        for ($i = 0; $i < 4; $i++) {
        ?>
            <div class="gallery__column">
                <?php

                for ($j = 0; $j < 5; $j++) {
                    $index = $i * 5 + $j;
                ?>
                    <a href="#" target="_blank" class="gallery__link">
                        <figure class="gallery__thumb py-2">
                            <img src="<?=$data['imgs'][$index]['img']?>" alt="Photo" class="gallery__image">
                            <figcaption class="gallery__caption"><?=$data['imgs'][$index]['tour_name']?></figcaption>
                        </figure>
                    </a>
                <?php } ?>
            </div>
        <?php
        } ?>
    </div>
</div>
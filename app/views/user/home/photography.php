<nav aria-label="breadcrumb">
    <div class="bg-body-secondary hide">
        <ol class="mx-auto w-75 breadcrumb py-2 fs-6">
        <li class="breadcrumb-item">
          <a class="text-black link-underline link-underline-opacity-0 breadcrumb__item"
          href="<?php echo $path ?>user/home/homepage">Trang chủ</a></li>
        <li class="breadcrumb-item active">
          Hình ảnh
        </li>
      </ol>
    </div>
    </nav>


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
                <?php }?>
            </div>
        <?php
}?>
    </div>
</div>
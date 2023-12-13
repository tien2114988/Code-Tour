



<div class="container-fluid price-list">
        <div class="w-75 mx-auto mb-5">
            <h2 class="text-center my-4 text-upercase">Bảng Giá</h2>




            <table class="table table-bordered text-center align-middle">
    <thead class="thead-primary table-info">
      <tr class="">
        <th scope="col">#</th>
        <th class="w-25" scope="col">Tên Tour</th>
        <th scope="col">Thời Gian</th>
        <th scope="col">Phương Tiện</th>
        <th scope="col">Khách Sạn</th>
        <th scope="col">Giá Người Lớn</th>
        <th scope="col">Giá Trẻ Em</th>
        <th scope="col">Hành Động</th>
      </tr>
    </thead>
    <tbody class="">
      <?php foreach ($data['tour'] as $tour) {?>
      <tr class="">
        <th scope="row"><?php echo $tour['tour_id'] ?></th>
        <td class="tour-link text-start"><a class="link-dark link-underline-opacity-0" href="<?php echo $path ?>/tour/tour_detail/<?php echo $tour['tour_id'] ?>"><?php echo $tour['tour_name'] ?></a></td>
        <td><?php echo $tour['tour_days'] ?></td>
        <td><?php echo $tour['vehicle'] ?></td>
        <td><?php for ($i = 0; $i < $tour['hotel_rate']; $i++) {?>
                  <i class="bi bi-star"></i>
                <?php }?></td>
        <td><?php echo $tour['adult_price'] ?> đ</td>
        <td><?php echo $tour['child_price'] ?> đ</td>
        <td><a href="<?php echo $path ?>/tour/booking/<?php echo $tour['tour_id'] ?>" type="button" class="btn btn-primary py-1 px-2 rounded-4">Đặt Tour</a></td>
      </tr>
      <?php }?>
      <!-- Add more rows as needed -->
    </tbody>
  </table>


    </div>
</div>

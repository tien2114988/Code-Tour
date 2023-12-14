<!-- <form class="max-w-full" action="" method="POST"> -->


<div class="max-w-full flex flex-row">
    <form action="<?php echo $path ?>admin/tours/editTour/<?php echo $data['tour_id'] ?>" method="POST" class="mr-3 container min-w-md" id="thong-tin-tour">
        <div class="text-2xl">Thông tin Tour</div>
        <?php //var_dump($data['tour_info']['tour']);
        ?>
        <hr class="mt-2">
        <div class="max-w-full">
            <div class="mb-5 flex w-full items-baseline justify-between my-4">
                <label for="ten-tour" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Tên Tour</label>
                <input type="text" name="ten-tour" id="ten-tour" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?php echo $data['tour_info']['tour'][0]['tour_name'] ?> " required>
            </div>
            <div class="mb-5 flex w-full items-baseline justify-between my-4">
                <label for="gia-nguoi-lon" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Giá người lớn</label>
                <input type="text" name="gia-nguoi-lon" id="gia-nguoi-lon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?php echo $data['tour_info']['tour'][0]['adult_price'] ?> " required>
            </div>
            <div class="mb-5 flex w-full items-baseline justify-between my-4">
                <label for="gia-tre-em" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Giá trẻ em</label>
                <input type="text" name="gia-tre-em" id="gia-tre-em" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?php echo $data['tour_info']['tour'][0]['child_price'] ?> " required>
            </div>
            
            <div class="mb-5 flex w-full items-baseline justify-between my-4">
                <label for="bao-gom" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Bao gồm</label>
                <textarea type="text" name="bao-gom" id="bao-gom" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required><?php echo $data['tour_info']['tour'][0]['tour_include'] ?> </textarea>
            </div>

            <div class="mb-5 flex w-full items-baseline justify-between my-4">
                <label for="khong-bao-gom" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Không bao gồm</label>
                <textarea type="text" name="khong-bao-gom" id="khong-bao-gom" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"><?php echo $data['tour_info']['tour'][0]['tour_exclude'] ?>  </textarea>
            </div>
            
            <div class="mb-5 flex w-full items-baseline justify-between my-4">
                <label for="dieu-kien-dat-tour" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Điều kiện đặt tour</label>
                <textarea type="text" name="dieu-kien-dat-tour" id="dieu-kien-dat-tour" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"> <?php echo $data['tour_info']['tour'][0]['tour_condition'] ?> </textarea>
            </div>

            <div class="mb-5 flex w-full items-baseline justify-between my-4">
                <label for="phuong-tien" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Phương tiện</label>
                <select id="phuong-tien" name="phuong-tien" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    <option value="<?php echo $data['tour_info']['tour'][0]['vehicle'] ?>"><?php echo $data['tour_info']['tour'][0]['vehicle'] ?></option>
                    <?php foreach (array(
                        "o-to" => "Ô tô",
                        "may-bay" => "Máy bay",
                        "xe-khach" => "Xe khách",
                        "o-to-may-bay" => "Ô tô & Máy bay",
                        "xe-khach-may-bay" => "Xe khách & Máy bay",
                        "xe-khach-o-to" => "Xe khách & Ô tô"
                        ) as $value => $vehicle) {
                            if ($vehicle !== $data['tour_info']['tour'][0]['vehicle']) {
                                echo "<option value=\"$vehicle\">$vehicle</option>";
                            }
                        }
                        ?>

</select>
</div>
<div class="mb-5 flex w-full items-baseline justify-between my-4">
    <label for="danh-gia" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Chất lượng nhà hàng</label>
    <select id="danh-gia" name="danh-gia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        <option value="<?php echo $data['tour_info']['tour'][0]['hotel_rate'].' sao' ?>"><?php echo $data['tour_info']['tour'][0]['hotel_rate']. ' sao' ?></option>
                    <?php foreach (array(
                        "1" => '1 sao',
                        "2" => "2 sao",
                        "3" => "3 sao",
                        "4" => "4 sao",
                        "5" => "5 sao",
                        ) as $value => $danh_gia) {
                            if ($danh_gia !== $data['tour_info']['tour'][0]['hotel_rate'].' sao') {
                                echo "<option value=\"$value\">$danh_gia</option>";
                            }
                        }
                        ?>

                </select>
            </div>
            
            <div class="mb-5 flex w-full items-baseline justify-between my-4">
                <label for="so-ngay" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Số ngày</label>
                <select id="so-ngay" name="so-ngay" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    <option value="<?php echo $data['tour_info']['tour'][0]['tour_days'] ?>"><?php echo $data['tour_info']['tour'][0]['tour_days'] ?></option>
                    <?php
                    foreach (array(
                        "1n" => "1 Ngày",
                        "2n1d" => "2 Ngày 1 Đêm",
                        "3n2d" => "3 Ngày 2 Đêm",
                        "4n3d" => "4 Ngày 3 Đêm",
                        "5n4d" => "5 Ngày 4 Đêm",
                        "6n5d" => "6 Ngày 5 Đêm",
                        "7n6d" => "7 Ngày 6 Đêm",
                        "8n7d" => "8 Ngày 7 Đêm",
                        "9n8d" => "9 Ngày 8 Đêm",
                        "tren-9n" => "Trên 9 Ngày"
                        ) as $value => $tour_day) {
                            if ($tour_day !== $data['tour_info']['tour'][0]['tour_days']) {
                                echo "<option value=\"$tour_day\">$tour_day</option>";
                            }
                        }
                        ?>
                </select>
            </div>
            
            <div class="mb-5 flex w-full items-baseline justify-between my-4">
                <label for="mo-ta" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Mô tả</label>
                <textarea type="text" name="mo-ta" id="mo-ta" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"> <?php echo $data['tour_info']['tour'][0]['description'] ?> </textarea>
            </div>
            
            
            <div class="mb-5 flex w-full items-baseline justify-between my-4">
                <label for="dieu-kien-huy-tour" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Điều kiện huỷ tour</label>
                <textarea type="text" name="dieu-kien-huy-tour" id="dieu-kien-huy-tour" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"> <?php echo $data['tour_info']['tour'][0]['tour_cancel'] ?> </textarea>
            </div>
            
            <div class="mb-5 flex w-full items-baseline justify-between my-4">
                <label for="hinh-anh" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Hình ảnh</label>
                <input type="text" name="hinh-anh" id="hinh-anh" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?php echo $data['tour_info']['image'][0]['img'];?> " required>
            </div>
        </div>
        <div class="flex justify-end mt-4">
            <button class="mx-2 px-4 py-2 border border-blue-400 text-blue-400 rounded-lg hover:scale-105 hover:text-white hover:bg-blue-400 hover:font-semibold ease-out duration-100" type="submit">Lưu thay đổi</button>
            <button class="mx-2 px-4 py-2 border border-red-400 text-red-400 rounded-lg hover:scale-105 hover:text-white hover:bg-red-400 hover:font-semibold ease-out duration-100" type="reset">Bỏ thay đổi</button>
        </div>
    </form>
    
    
    
    <div class="container max-w-full ml-3" id="thong-tin-lich-trinh">
        <div class="flex justify-between">
            <div class="text-2xl">
                Thông tin lịch trình
            </div>
            <div>
                <a class="mx-2 px-4 py-2 border border-blue-400 text-blue-400 rounded-lg hover:scale-105 hover:text-white hover:bg-blue-400 hover:font-semibold ease-out duration-100" onclick="addTour(<?php echo $data['tour_id'] ?>)">Thêm lịch trình</a>
                
            </div>
        </div>
        
        <hr class="mt-2">
        <?php
        ?>
        <form action="<?php echo $path ?>admin/tours/addSchedulePost" method="POST" class="max-w-3xl schedule-list">
            <?php foreach ($data['tour_info']['schedule'] as $key => $value) { ?>
                <div>
                    <div class="mb-5 flex w-full items-baseline justify-between my-4">
                        <label for="day" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Ngày</label>
                        <input type="text" name="day" id="day" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?php echo $value['day'] ?>">
                    </div>

                    <div class="mb-5 flex w-full items-baseline justify-between my-4">
                        <label for="dia-diem" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Địa điểm</label>
                        <input type="text" name="dia-diem" id="dia-diem" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?php echo $value['location'] ?>">
                    </div>

                    <div class="mb-5 flex w-full items-baseline justify-between my-4">
                        <label for="mo-ta-lich-trinh" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Mô tả lịch trình</label>
                        <textarea type="text" name="mo-ta-lich-trinh" id="mo-ta-lich-trinh" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"> <?php echo $value['description'] ?> </textarea>
                    </div>
                    <a href="<?php echo $path ?>admin/tours/deleteSchedule/<?php echo $value['tour_id'] . '/' . $value['schedule_id'] . '/' . $value['day']; ?>" class="mx-2 px-4 py-2 border border-red-400 text-red-400 rounded-lg hover:scale-105 hover:text-white hover:bg-red-400 hover:font-semibold ease-out duration-100 divide-solid <?php if ($key !== array_key_last($data['tour_info']['schedule'])) echo "pointer-events-none cursor-default"; ?>">Xoá lịch trình</a>
                    <hr class="mt-3">
                </div>
            <?php } ?>
        </form>
    </div>
</div>


<script>
    function addTour(tour_id) {
        const list = document.querySelector(".schedule-list");
        const newNode = document.createElement("div");
        newNode.innerHTML = `
        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="day" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Ngày</label>
            <input type="text" name="day" id="day" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            <input name="tour_id" type="number" value="${tour_id}" class="hidden">
        </div>

        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="dia-diem" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Địa điểm</label>
            <input type="text" name="dia-diem" id="dia-diem" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>

        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="mo-ta-lich-trinh" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Mô tả lịch trình</label>
            <textarea type="text" name="mo-ta-lich-trinh" id="mo-ta-lich-trinh" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>hi</textarea>
        </div>
        
        <button class="mx-2 px-4 py-2 border border-blue-400 text-blue-400 rounded-lg hover:scale-105 hover:text-white hover:bg-blue-400 hover:font-semibold ease-out duration-100" type="submit">Thêm lịch trình</button> 
        <hr class="mt-2">`
        list.appendChild(newNode);
    }
</script>
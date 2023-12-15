<form action="<?php echo $path ?>admin/tours/addTour" method="POST" class="mr-3 container min-w-md" id="thong-tin-tour">
    <div class="text-2xl">Thông tin Tour</div>
    <hr class="mt-2">
    <div class="max-w-full">
        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="ten-tour" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Tên Tour</label>
            <input type="text" name="ten-tour" id="ten-tour" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="gia-nguoi-lon" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Giá người lớn</label>
            <input type="number" name="gia-nguoi-lon" id="gia-nguoi-lon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" min='0' required>
        </div>
        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="gia-tre-em" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Giá trẻ em</label>
            <input type="number" name="gia-tre-em" id="gia-tre-em" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required min='0'>
        </div>

        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="bao-gom" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Bao gồm</label>
            <textarea type="text" name="bao-gom" id="bao-gom" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required> </textarea>
        </div>

        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="khong-bao-gom" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Không bao gồm</label>
            <textarea type="text" name="khong-bao-gom" id="khong-bao-gom" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required> </textarea>
        </div>

        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="dieu-kien-dat-tour" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Điều kiện đặt tour</label>
            <textarea type="text" name="dieu-kien-dat-tour" id="dieu-kien-dat-tour" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required> </textarea>
        </div>

        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="phuong-tien" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Phương tiện</label>
            <select id="phuong-tien" name="phuong-tien" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                <?php foreach (array(
    "o-to" => "Ô tô",
    "may-bay" => "Máy bay",
    "xe-khach" => "Xe khách",
    "o-to-may-bay" => "Ô tô & Máy bay",
    "xe-khach-may-bay" => "Xe khách & Máy bay",
    "xe-khach-o-to" => "Xe khách & Ô tô",
) as $value => $vehicle) {
    echo "<option value=\"$vehicle\">$vehicle</option>";
}
?>

            </select>
        </div>
        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="danh-gia" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Chất lượng nhà hàng</label>
            <select id="danh-gia" name="danh-gia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                <?php foreach (array(
    "1" => '1 sao',
    "2" => "2 sao",
    "3" => "3 sao",
    "4" => "4 sao",
    "5" => "5 sao",
) as $value => $danh_gia) {
    echo "<option value=\"$value\">$danh_gia</option>";
}
?>

            </select>
        </div>

        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="so-ngay" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Số ngày</label>
            <select id="so-ngay" name="so-ngay" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
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
    "tren-9n" => "Trên 9 Ngày",
) as $value => $tour_day) {
    echo "<option value=\"$tour_day\">$tour_day</option>";
}
?>
            </select>
        </div>
        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="danh-muc" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Danh mục</label>
            <select id="danh-muc" name="danh-muc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                <?php
foreach ($data['category'] as $category) {
    echo sprintf("<option value=\"%s\">%s</option>", $category['category_id'], $category['category_name']);
}
?>
            </select>
        </div>

        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="mo-ta" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Mô tả</label>
            <textarea type="text" name="mo-ta" id="mo-ta" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required>  </textarea>
        </div>


        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="dieu-kien-huy-tour" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Điều kiện huỷ tour</label>
            <textarea type="text" name="dieu-kien-huy-tour" id="dieu-kien-huy-tour" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required> </textarea>
        </div>

        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="hinh-anh" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Hình ảnh</label>
            <input type="text" name="hinh-anh" id="hinh-anh" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>

        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="dia-diem" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Địa điểm</label>
            <input type="text" name="dia-diem" id="dia-diem" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>

        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="mo-ta-lich-trinh" class="basis-1/3 block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Mô tả lịch trình</label>
            <textarea type="text" name="mo-ta-lich-trinh" id="mo-ta-lich-trinh" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" required> </textarea>
        </div>

    </div>
    <div class="flex justify-end mt-4">
        <button class="mx-2 px-4 py-2 border border-blue-400 text-blue-400 rounded-lg hover:scale-105 hover:text-white hover:bg-blue-400 hover:font-semibold ease-out duration-100" type="submit">Thêm</button>
        <button class="mx-2 px-4 py-2 border border-red-400 text-red-400 rounded-lg hover:scale-105 hover:text-white hover:bg-red-400 hover:font-semibold ease-out duration-100" type="reset">Bỏ </button>
    </div>
</form>
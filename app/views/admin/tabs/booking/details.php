<?php const status = array(
    '0' => 'Chưa xác nhận',
    '1' => 'Đã xác nhận',
    '2' => 'Đã hủy'
); ?>
<form action="<?php echo $path; ?>admin/booking/updateStatus/<?php echo $data['booking']->booking_id ?>" method="post">
    <div class="text-2xl">Thông tin đặt tour</div>
    <hr>
    <div class="max-w-2xl">
        <div class="mb-5 flex w-full items-baseline my-4 text-lg text-gray-900">
            <div class="font-medium w-32 mr-4">
                Tên Tour:
            </div>
            <?php echo $data['booking']->tour_name ?>
        </div>
        <div class="mb-5 flex w-full items-baseline my-4 text-lg text-gray-900">
            <div class="font-medium w-32 mr-4">
                Người dùng:
            </div>
            <?php echo $data['booking']->fullname ?>
        </div>
        <div class="mb-5 flex w-full items-baseline my-4 text-lg text-gray-900">
            <div class="font-medium w-32 mr-4">
                Email:
            </div>
            <?php echo $data['booking']->email ?>
        </div>
        <div class="mb-5 flex w-full items-baseline my-4 text-lg text-gray-900">
            <div class="font-medium w-32 mr-4">
                SĐT:
            </div>
            <?php echo $data['booking']->phone_number ?>
        </div>
        <div class="mb-5 flex w-full items-baseline my-4 text-lg text-gray-900">
            <div class="font-medium w-32 mr-4 flex-shrink-0">
                Ngày đặt tour:
            </div>
            <?php echo $data['booking']->created_datetime ?>
        </div>
        <div class="mb-5 flex w-full items-baseline my-4 text-lg text-gray-900">
            <div class="font-medium w-32 mr-4 flex-shrink-0">
                Trạng thái:
            </div>
            <?php echo status[$data['booking']->status] ?>
        </div>
        <div class="mb-5 flex w-full items-baseline my-4 text-lg text-gray-900">
            <div class="font-medium w-32 mr-4 flex-shrink-0">
                Số người lớn:
            </div>
            <?php echo $data['booking']->adult_count ?>
        </div>
        <div class="mb-5 flex w-full items-baseline my-4 text-lg text-gray-900">
            <div class="font-medium w-32 mr-4 flex-shrink-0">
                Số trẻ em:
            </div>
            <?php echo $data['booking']->child_count ?>
        </div>
        <div class="mb-5 flex w-full items-baseline my-4 text-lg text-gray-900">
            <div class="font-medium w-32 mr-4 flex-shrink-0">
                Tổng:
            </div>
            <?php echo $data['booking']->total_money ?>
        </div>
    </div>
    <button name="confirmSubmit" type="submit" class="px-4 py-2 border border-blue-400 text-blue-400 rounded-lg hover:scale-105 hover:text-white hover:bg-blue-400 hover:font-semibold ease-out duration-100">Xác nhận</button>
    <button name="cancelSubmit" type="submit" class="px-4 py-2 border border-red-400 text-red-400 rounded-lg hover:scale-105 hover:text-white hover:bg-red-400 hover:font-semibold ease-out duration-100">Hủy</button>
    <button name="returnSubmit" type="submit" class="px-4 py-2 border border-gray-400 text-gray-400 rounded-lg hover:scale-105 hover:text-white hover:bg-gray-400 hover:font-semibold ease-out duration-100">Quay lại</button>
    </div>
</form>
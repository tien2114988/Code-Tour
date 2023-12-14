<?php const status = array(
    '0' => 'Chưa xác nhận',
    '1' => 'Đã xác nhận',
    '2' => 'Đã hủy'
); ?>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-left rtl:text-right text-gray-500">
        <thead class="text-lg text-gray-700 bg-gray-200">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Tên
                </th>
                <th scope="col" class="px-6 py-3">
                    Tour
                </th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                    SĐT
                </th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                    Trạng thái
                </th>
                <th scope="col" class="px-6 py-3">
                </th>
            </tr>
        </thead>
        <tbody>
            <?php if ($data['bookings']) foreach ($data['bookings'] as $booking) { ?>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap">
                        <div class="text-base font-semibold"><?php echo $booking->fullname ?></div>
                    </th>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <?php echo $booking->tour_name ?>
                    </td>
                    <td class="px-6 py-4 max-w-xs whitespace-nowrap overflow-ellipsis overflow-x-hidden">
                        <?php echo $booking->phone_number ?>
                    </td>
                    <td class="px-6 py-4 max-w-xs whitespace-nowrap overflow-ellipsis overflow-x-hidden">
                        <?php echo status[$booking->status] ?>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex justify-end">
                            <a href="<?php echo $path ?>admin/booking/details/<?php echo $booking->booking_id ?>" class="block cursor-pointer py-2 px-4 min-w-fit font-medium text-blue-400 border border-blue-400 rounded-lg hover:text-white hover:bg-blue-400 mr-2">Chi tiết</a>
                            <a href="<?php echo $path ?>admin/booking/deleteBooking/<?php echo $booking->booking_id ?>" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="booking-delete-btn block cursor-pointer py-2 px-4 min-w-fit font-medium text-red-400 border border-red-400 rounded-lg hover:text-white hover:bg-red-400 mr-2">Xóa</a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500">Xác nhận xóa?</h3>
                <button data-modal-hide="popup-modal" type="button" class="booking-confirm-btn text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                    Xác nhận
                </button>
                <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Quay lại</button>
            </div>
        </div>
    </div>
</div>
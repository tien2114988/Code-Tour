<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
        <a class="py-2 px-4 font-medium text-blue-400 border border-blue-400 rounded-lg hover:text-white hover:bg-blue-400 mr-2" href="./tours/themTour">Thêm tour</a>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
        </div>
    </div>
    <table class="w-full text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-lg text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Tên Tour
                </th>
                <th scope="col" class="px-6 py-3">
                    Lượt xem
                </th>
                <th scope="col" class="px-6 py-3">
                    Lượt đặt
                </th>
                <th scope="col" class="px-6 py-3">
                    Lượt đánh giá
                </th>
                <th scope="col" class="px-6 py-3">
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['tour_data'] as $tour) { ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-10 h-10 rounded-full" src="https://tourbonphuong.com/upload/product/chi-tiet-2-9327_1000x1000.jpg" alt="avatar">
                        <div class="ps-3">
                            <div class="text-base font-semibold"><?php echo $tour['tour_name']; ?></div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        <?php echo $tour['view_count']; ?>
                    </td>
                    <td class="px-6 py-4">

                        <?php echo $tour['comment_count']; ?>
                    </td>
                    <td class="px-6 py-4">

                        <?php echo $tour['booking_count']; ?>
                    </td>

                    <td class="px-6 py-4 flex justify-end">
                        <a class="py-2 px-4 font-medium text-blue-400 border border-blue-400 rounded-lg hover:text-white hover:bg-blue-400 mr-2" href="./tours/tourDetail/<?php echo $tour['tour_id'] ?>">Chi tiết</a>
                        <a class="py-2 px-4 font-medium text-red-400 border border-red-400 rounded-lg hover:text-white hover:bg-red-400 mr-2" href="./tours/deleteTour/<?php echo $tour['tour_id'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
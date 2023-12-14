<div class="flex justify-between">
    <div class="text-2xl font-semibold mb-4">Danh sách danh mục</div>
    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2 text-center" type="button">
        Thêm danh mục
    </button>
</div>
<?php if (isset($data['addStatus'])) { ?>
    <div><?php if ($data['addStatus']) {
                echo 'Thêm thành công';
            } else {
                echo 'Thêm thất bại';
            } ?></div>
<?php } ?>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-left rtl:text-right text-gray-500">
        <thead class="text-lg text-gray-700 bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Tên danh mục
                </th>
                <th scope="col" class="px-6 py-3">
                    Mã danh mục
                </th>
                <th scope="col" class="px-6 py-3">
                    Số lượng tour
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data['categories'] as $category) { ?>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <div class="flex items-center">
                            <img class="w-12 h-12 mr-4 rounded-full" src="<?php echo $category->category_img ?>" alt="img">
                            <?php echo $category->category_name ?>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        <?php echo $category->category_id ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $category->tour_count ?>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="<?php echo $path ?>admin/categories/editCategory/<?php echo $category->category_id?>" class="py-2 px-4 font-medium mx-1 text-blue-400 border border-blue-400 rounded-lg hover:text-white hover:bg-blue-400">Chỉnh sửa</a>
                        <a href="<?php echo $path ?>admin/categories/deleteCategory/<?php echo $category->category_id?>" class="py-2 px-4 font-medium mx-1 text-red-400 border border-red-400 rounded-lg hover:text-white hover:bg-red-400">Xóa</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-lg font-semibold text-gray-900">
                    Thêm danh mục
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <!-- Modal body -->
            <form action="<?php echo $path ?>admin/categories/addCategory" method="POST" class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="category_name" class="block mb-2 text-sm font-medium text-gray-900">Tên danh mục</label>
                        <input type="text" name="category_name" id="category_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2">
                        <label for="category_img" class="block mb-2 text-sm font-medium text-gray-900">Ảnh</label>
                        <input type="text" name="category_img" id="category_img" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Type product name" required="">
                    </div>
                    <button name="addSubmit" type="submit" class="text-white items-center bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Thêm danh mục
                    </button>
            </form>
        </div>
    </div>
</div>
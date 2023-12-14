<form action="<?php echo $path?>admin/categories/updateCategory/<?php echo $data['category']['category_id']?>" method="POST" class="max-w-2xl mx-auto">
    <div class="text-2xl">Chỉnh sửa thông tin danh mục</div>
    <hr>
    <div class="max-w-2xl">
        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="category_name" class="block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Tên danh mục</label>
            <input type="text" name="category_name" id="category_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 max-w-md" value="<?php echo $data['category']['category_name']; ?>">
        </div>
        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="category_img" class="block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Ảnh</label>
            <input type="text" name="category_img" id="category_img" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 max-w-md" value="<?php echo $data['category']['category_img']; ?>">
        </div>
    </div>
    <div class="flex justify-end">
        <button name="editSubmit" type="submit" class="mx-2 px-4 py-2 border border-blue-400 text-blue-400 rounded-lg hover:scale-105 hover:text-white hover:bg-blue-400 hover:font-semibold ease-out duration-100">Lưu thay đổi</button>
        <button type="reset" class="mx-2 px-4 py-2 border border-red-400 text-red-400 rounded-lg hover:scale-105 hover:text-white hover:bg-red-400 hover:font-semibold ease-out duration-100">Bỏ thay đổi</button>
    </div>
</form>
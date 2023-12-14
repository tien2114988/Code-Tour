<form action="<?php echo $path?>admin/contact/updateContact" method="POST" class="max-w-full">
    <div class="text-2xl">Thông tin liên hệ</div>
    <hr>
    <div class="max-w-2xl">
        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="address" class="block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Địa chỉ</label>
            <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 max-w-md" value="<?php echo $data['contact']->address; ?>">
        </div>
        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="phone_number" class="block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Điện thoại</label>
            <input type="text" name="phone_number" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 max-w-md" value="<?php echo $data['contact']->phone_number; ?>">
        </div>
        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="hotline" class="block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Hotline</label>
            <input type="text" name="hotline" id="hotline" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 max-w-md" value="<?php echo $data['contact']->hotline ?>">
        </div>
        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="email" class="block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Email</label>
            <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 max-w-md" value="<?php echo $data['contact']->email ?>">
        </div>
    </div>
    <div class="text-2xl">Thông tin chuyển khoản</div>
    <hr>
    <div class="max-w-2xl">
        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="transfer_name" class="block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Chủ tài khoản</label>
            <input type="text" name="transfer_name" id="transfer_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 max-w-md" value="<?php echo $data['contact']->transfer_name ?>">
        </div>
        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="account_number" class="block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Số tài khoản</label>
            <input type="text" name="account_number" id="account_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 max-w-md" value="<?php echo $data['contact']->account_number ?>">
        </div>
        <div class="mb-5 flex w-full items-baseline justify-between my-4">
            <label for="bank_name" class="block mb-2 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Ngân hàng</label>
            <input type="text" name="bank_name" id="bank_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 max-w-md" value="<?php echo $data['contact']->bank_name ?>">
        </div>
    </div>
    <div class="flex justify-end">
        <button name="contactSubmit" type="submit" class="mx-2 px-4 py-2 border border-blue-400 text-blue-400 rounded-lg hover:scale-105 hover:text-white hover:bg-blue-400 hover:font-semibold ease-out duration-100">Lưu thay đổi</button>
        <button type="reset" class="mx-2 px-4 py-2 border border-red-400 text-red-400 rounded-lg hover:scale-105 hover:text-white hover:bg-red-400 hover:font-semibold ease-out duration-100">Bỏ thay đổi</button>
    </div>
</form>
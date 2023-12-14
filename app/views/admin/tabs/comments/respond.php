<form action="<?php echo $path; ?>admin/comments/addResponse/<?php echo $data['comment']->comment_id ?>" method="post">
    <div class="text-2xl">Phản hồi</div>
    <hr>
    <div class="max-w-2xl">
        <div class="mb-5 flex w-full items-baseline my-4 text-lg text-gray-900">
            <div class="font-medium w-28 mr-4">
                Tên Tour:
            </div>
            <?php echo $data['comment']->tour_name ?>
        </div>
        <div class="mb-5 flex w-full items-baseline my-4 text-lg text-gray-900">
            <div class="font-medium w-28 mr-4">
                Người dùng:
            </div>
            <?php echo $data['comment']->fullname ?>
        </div>
        <div class="mb-5 flex w-full items-baseline my-4 text-lg text-gray-900">
            <div class="font-medium w-28 mr-4">
                Email:
            </div>
            <?php echo $data['comment']->email ?>
        </div>
        <div class="mb-5 flex w-full items-baseline my-4 text-lg text-gray-900">
            <div class="font-medium w-28 mr-4">
                SĐT:
            </div>
            <?php echo $data['comment']->phone_number ?>
        </div>
        <div class="mb-5 flex w-full items-baseline my-4 text-lg text-gray-900">
            <div class="font-medium w-28 mr-4 flex-shrink-0">
                Nội dung:
            </div>
            <?php echo $data['comment']->content ?>
        </div>
        <div class="mb-5 flex w-full items-baseline my-4">
            <label for="response" class="block mb-2 w-28 text-lg font-medium text-gray-900 flex-shrink-0 mr-4">Phản hồi</label>
            <textarea type="text" name="response" id="response" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 max-w-md" value="<?php echo $data['comment']->response; ?>"></textarea>
        </div>
    </div>
    <button name="resSubmit" type="submit" class="px-4 py-2 border border-blue-400 text-blue-400 rounded-lg hover:scale-105 hover:text-white hover:bg-blue-400 hover:font-semibold ease-out duration-100">Lưu phản hồi</button>
    </div>
</form>
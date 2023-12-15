<div class="relative overflow-x-auto shadow-md">
<table class="min-w-full border-collapse block md:table">
    <thead class="bg-gray-200 block md:table-header-group">
        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            <th class=" p-2 font-bold md:border md:border-grey-500 text-left block md:table-cell md:bg-gray-200">Họ và tên</th>
            <th class=" p-2 font-bold md:border md:border-grey-500 text-left block md:table-cell md:bg-gray-200">Số điện thoại</th>
            <th class=" p-2 font-bold md:border md:border-grey-500 text-left block md:table-cell md:bg-gray-200">Địa chỉ email</th>
            <th class=" p-2 font-bold md:border md:border-grey-500 text-left block md:table-cell md:bg-gray-200">Nội dung</th>
            <th class=" p-2 font-bold md:border md:border-grey-500 text-left block md:table-cell md:bg-gray-200">Địa chỉ</th>

        </tr>
    </thead>
    <tbody class="block md:table-row-group">
        <?php if ($data['customers']) {
    foreach ($data['customers'] as $customer) {?>
            <tr class="m-1 border-black md:border-none block md:table-row">
                <td class="p-2 md:bg-white md:border md:border-grey-500 text-left block md:table-cell bg-gray-200"><span class="inline-block w-1/3 md:hidden font-bold ">Họ và tên</span><?php echo $customer['fullname']; ?></td>
                <td class="p-2 md:bg-white md:border md:border-grey-500 text-left block md:table-cell bg-gray-200"><span class="inline-block w-1/3 md:hidden font-bold ">Số điện thoại</span><?php echo $customer['phone_number'] ?></td>
                <td class="p-2 md:bg-white md:border md:border-grey-500 text-left block md:table-cell bg-gray-200"><span class="inline-block w-1/3 md:hidden font-bold ">Địa chỉ Email </span><?php echo $customer['email'] ?></td>
                <td class="p-2 md:bg-white md:border md:border-grey-500 text-left block md:table-cell bg-gray-200"><span class="inline-block w-1/3 md:hidden font-bold ">Nội dung</span><?php echo $customer['content'] ?></td>
                <td class="p-2 md:bg-white md:border md:border-grey-500 text-left block md:table-cell bg-gray-200"><span class="inline-block w-1/3 md:hidden font-bold ">Địa chỉ</span><?php echo $customer['address'] ?></td>
            </tr>
        <?php }
}?>

    </tbody>
</table>
</div>
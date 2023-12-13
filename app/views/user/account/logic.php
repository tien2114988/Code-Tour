<?php
// var_dump($data['booking']);
$response = "
                    <div class='bill-title d-flex justify-content-between align-items-center m-2'>
                                    <div class='user__infor-detail w-100 d-flex gap-2 flex-column'>
                                        <div class='title'>
                                            <p>Họ và tên:</p>
                                            <span>{$data['booking']['fullname']}</span>
                                        </div>
                                        <div class='title'>
                                            <p>Email:</p>
                                            <span>{$data['booking']['email']}</span>
                                        </div>
                                        <div class='title'>
                                            <p>Địa chỉ:</p>
                                            <span>{$data['booking']['address']}</span>
                                        </div>
                                        <div class='title'>
                                            <p>Điện thoại:</p>
                                            <span>{$data['booking']['phone_number']}</span>
                                        </div>
                                    </div>
                    </div>
                                <div class='bill__description'>
                                    <div class='bill__description-date d-flex justify-content-around my-3'>
                                        <div class='title'>
                                            <p>Ngày Booking: <span>{$data['booking']['created_datetime']}</span> </p>
                                        </div>
                                        <div class='title'>
                                            <p>Ngày khởi hành: <span>{$data['booking']['depart_date']}</span> </p>
                                        </div>
                                        <div class='title'>";

switch ($data['booking']['status']) {
    case 0:
        $statusClass = 'text-warning';
        $statusText = 'Đang xử lý';
        break;
    case 1:
        $statusClass = 'text-primary';
        $statusText = 'Đã xác nhận';
        break;
    case 2:
        $statusClass = 'text-success';
        $statusText = 'Đã hoàn thành';
        break;
    case 3:
        $statusClass = 'text-danger';
        $statusText = 'Đã hủy';
        break;
    default: {
            break;
        }
}

$response .= "                            <span class='{$statusClass}'>{$statusText}</span>
                                            
                                        </div>
                                    </div>
                                    <div class='bill__description-title'>
                                        <div class='title d-flex justify-content-between'>
                                            <h4>THÔNG TIN CHUYẾN ĐI</h4>
                                        </div>
                                        <table class='table table-striped table-bordered'>
                                            <thead>
                                                <tr>
                                                    <th scope='col'>#TourName</th>
                                                    <th scope='col'>Người lớn</th>
                                                    <th scope='col'>Trẻ em</th>
                                                    <th scope='col'>Tổng tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope='row'>{$data['booking']['tour_name']}</th>
                                                    <td>{$data['booking']['adult_count']}</td>
                                                    <td>{$data['booking']['child_count']}</td>
                                                    <td>{$data['booking']['total_money']}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class='bill__description d-flex justify-content-between p-3'>
                                            <div class='bill__total d-flex align-items-center gap-3'>
                                                <h4>Cần thanh toán</h4>
                                                <h6 class='text-danger'>{$data['booking']['total_money']}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
echo $response;

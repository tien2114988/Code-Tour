<?php
class BookingModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    // public function getAll($tour_id)
    // {
    //     $query = "SELECT * FROM comment WHERE tour_id=$tour_id ORDER BY time DESC";
    //     $data = $this->database->select($query);
    //     if ($data) {
    //         return $data->fetch_all(MYSQLI_ASSOC);
    //     } else {
    //         return $data;
    //     }
    // }

    // public function getById($id)
    // {
    //     $query = "SELECT * FROM comment WHERE comment_id=$id";
    //     $data = $this->database->select($query);
    //     return $data->fetch_all(MYSQLI_ASSOC)[0];
    // }
    public function getAllBookingById($user_id)
    {
        $sql = "select distinct booking_id, fullname, email, address, phone_number, total_money,
        created_datetime, depart_date, status,  tour_name from booking
        join tour on booking.tour_id = tour.tour_id where user_id = $user_id;";
        $result = $this->database->select($sql);
        return $result;
    }
    public function getAllBookingByBId($user_id, $booking_id)
    {
        $sql = "select distinct fullname, email, address, phone_number, total_money,adult_count,child_count,
        created_datetime, depart_date, status,  tour_name from booking
        join tour on booking.tour_id = tour.tour_id where user_id = $user_id and booking_id = $booking_id;";
        $result = $this->database->select($sql);
        return $result->fetch_all(MYSQLI_ASSOC)[0];
    }

    public function insert($data)
    {
        $tour_id = $data['tour_id'];
        $fullname = $data['fullname'];
        $phone_number = $data['phone_number'];
        $email = $data['email'];
        $adult_count = $data['adult_count'];
        $child_count = $data['child_count'];
        $depart_date = $data['depart_date'];
        $total_money = $data['total_money'];
        $address = $data['address'];
        $user_id = $data['user_id'];
        $created_datetime = $data['created_datetime'];

        if ($user_id) {
            $query = "INSERT INTO `booking`(`adult_count`, `child_count`, `depart_date`, `total_money`, `fullname`, `address`, `phone_number`, `email`, `status`, `user_id`, `tour_id`,`created_datetime`) VALUES ('$adult_count','$child_count','$depart_date','$total_money','$fullname','$address','$phone_number','$email','0','$user_id','$tour_id','$created_datetime')";
        } else {
            $query = "INSERT INTO `booking`(`adult_count`, `child_count`, `depart_date`, `total_money`, `fullname`, `address`, `phone_number`, `email`, `status`, `user_id`, `tour_id`,`created_datetime`) VALUES ('$adult_count','$child_count','$depart_date','$total_money','$fullname','$address','$phone_number','$email','0',null,'$tour_id','$created_datetime')";
        }
        return $this->database->insert($query);
    }
}

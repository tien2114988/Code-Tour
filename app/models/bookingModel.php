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

        $query = "INSERT INTO `booking`(`booking_id`, `adult_count`, `child_count`, `depart_date`, `total_money`, `fullname`, `address`, `phone_number`, `email`, `status`, `user_id`, `tour_id`,`created_datetime`) VALUES ('','$adult_count','$child_count','$depart_date','$total_money','$fullname','$address','$phone_number','$email','0','$user_id','$tour_id','$created_datetime')";

        return $this->database->insert($query);
    }
}
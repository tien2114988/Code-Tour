<?php
class BookingModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAllBookingData()
    {
        $query = "SELECT booking_id, fullname, tour_name, phone_number, status
        FROM tour T JOIN booking B ON T.tour_id = B.tour_id";
        $query = $this->database->select($query);
        if ($query) {
            $result = [];
            while ($row = mysqli_fetch_assoc($query)) {
                array_push($result, $row);
            }
            return json_encode($result, JSON_UNESCAPED_UNICODE);
        } else {
            return false;
        }
    }

    public function getBookingData($booking_id)
    {
        $query = "SELECT *
        FROM tour T JOIN booking B ON T.tour_id = B.tour_id
        WHERE booking_id = '$booking_id'";
        $query = $this->database->select($query);
        if ($query) {
            $result = mysqli_fetch_assoc($query);
            return json_encode($result, JSON_UNESCAPED_UNICODE);
        } else {
            return false;
        }
    }

    public function deleteBooking($booking_id)
    {
        $query = "DELETE FROM booking WHERE booking_id = $booking_id";
        $query = $this->database->delete($query);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function updateBookingStatus($booking_id, $status)
    {
        $query = "UPDATE booking SET status = '$status' WHERE booking_id = '$booking_id'";
        $query = $this->database->update($query);
        if ($query) {
            return $status;
        } else {
            return false;
        }
    }
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
            $query = "INSERT INTO `booking`( `adult_count`, `child_count`, `depart_date`, `total_money`, `fullname`, `address`, `phone_number`, `email`, `status`, `user_id`, `tour_id`,`created_datetime`) VALUES ('$adult_count','$child_count','$depart_date','$total_money','$fullname','$address','$phone_number','$email','0','$user_id','$tour_id','$created_datetime')";
        } else {
            $query = "INSERT INTO `booking`( `adult_count`, `child_count`, `depart_date`, `total_money`, `fullname`, `address`, `phone_number`, `email`, `status`, `user_id`, `tour_id`,`created_datetime`) VALUES ('$adult_count','$child_count','$depart_date','$total_money','$fullname','$address','$phone_number','$email','0',null,'$tour_id','$created_datetime')";
        }

        return $this->database->insert($query);
    }
}

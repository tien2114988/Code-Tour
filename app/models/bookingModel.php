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

    public function getBookingData($booking_id) {
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

    public function updateBookingStatus($booking_id, $status) {
        $query = "UPDATE booking SET status = '$status' WHERE booking_id = '$booking_id'";
        $query = $this->database->update($query);
        if ($query) {
            return $status;
        } else {
            return false;
        }
    }
}

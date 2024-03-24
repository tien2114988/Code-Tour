<?php
class BookingController extends Controller
{
    private $bookingModel;
    private $bookingData;
    private $path;

    public function __construct()
    {
        $this->bookingModel = $this->model("bookingModel");
        $this->bookingData = json_decode($this->bookingModel->getAllBookingData());
        $this->path = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
    }

    public function index()
    {
        $this->bookingData = json_decode($this->bookingModel->getAllBookingData());
        $this->viewAdmin('layout', ['page' => 'tabs/booking/booking', 'bookings' => $this->bookingData]);
    }

    public function viewDeleteResult($res)
    {
        $this->viewAdmin('layout', ['page' => 'tabs/booking/deleteResult', 'result' => $res]);
    }

    public function viewUpdateResult($res)
    {
        $this->viewAdmin('layout', ['page' => 'tabs/booking/updateResult', 'result' => $res]);
    }

    public function details($booking_id = -1)
    {
        if ($booking_id == -1) {
            header("Location: " . $this->path . "admin/booking");
        }
        $data = json_decode($this->bookingModel->getBookingData($booking_id));
        $this->viewAdmin('layout', ['page' => 'tabs/booking/details', 'booking' => $data]);
    }

    public function deleteBooking($booking_id = -1)
    {
        if ($booking_id == -1) {
            $path = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
            header("Location: " . $this->path . "/admin/booking");
        }
        $this->viewDeleteResult($this->bookingModel->deleteBooking($booking_id));
    }

    public function updateStatus($booking_id = -1)
    {
        if ($booking_id == -1) {
            header("Location: " . $this->path . "admin/booking");
        }
        if (isset($_POST['confirmSubmit'])) {
            $this->viewUpdateResult($this->bookingModel->updateBookingStatus($booking_id, 1));
        } else if (isset($_POST['cancelSubmit'])) {
            $this->viewUpdateResult($this->bookingModel->updateBookingStatus($booking_id, 2));
        } else {
            header("Location: " . $this->path . "admin/booking");
        }
    }
}

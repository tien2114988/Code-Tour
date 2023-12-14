<?php
class TourModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAll()
    {
        $query = "SELECT * FROM tour";
        $data = $this->database->select($query);
        return $data->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($tour_id)
    {

        $query_tour = sprintf("SELECT * FROM tour WHERE tour_id=%s;", $tour_id);
        $query_schedule = sprintf("SELECT * FROM tour_schedule WHERE tour_id=%s ORDER BY `day`;", $tour_id);
        $query_image = sprintf("SELECT * FROM tour_image WHERE tour_id=%s", $tour_id);


        $tour = $this->database->select($query_tour);
        $tour = $tour ? $tour->fetch_all(MYSQLI_ASSOC) : array();
        $image = $this->database->select($query_image);
        $image = $image ? $image->fetch_all(MYSQLI_ASSOC) : array();
        $schedule = $this->database->select($query_schedule);
        $schedule = $schedule ? $schedule->fetch_all(MYSQLI_ASSOC) : array();


        $query_max = "SELECT MAX(day) from tour_schedule WHERE `tour_id`=$tour_id;";
        $max = $this->database->select($query_max)->fetch_all(MYSQLI_ASSOC);
        return array(
            "tour" => $tour,
            "schedule" => $schedule,
            "image" => $image,
            "maxDay" => $max
        );
    }

    public function deleteSchedule($schedule_id, $day)
    {
        $query = "DELETE FROM tour_schedule WHERE `schedule_id`=$schedule_id AND `day` = $day";
        $deleted_row = $this->database->delete($query);
        return $deleted_row;
    }

    public function getMaxDay()
    {
        $query = "SELECT MAX(day) as `max` FROM tour_schedule";
        $result = $this->database->select($query);
        if ($result != false) {
            return $result->fetch_all();
        } else {
            return false;
        }
    }

    public function updateTour(
        $tour_id,
        $ten_tour,
        $gia_nguoi_lon,
        $gia_tre_em,
        $bao_gom,
        $khong_bao_gom,
        $dieu_kien_dat_tour,
        $phuong_tien,
        $so_ngay,
        $mo_ta,
        $dieu_kien_huy_tour,
        $danh_gia,
        $hinh_anh
    ) {


        $query = "UPDATE tour SET `tour_name`='$ten_tour', `adult_price`='$gia_nguoi_lon', `child_price`='$gia_tre_em', `tour_include`='$bao_gom', `tour_exclude`='$khong_bao_gom', `tour_condition`='$dieu_kien_dat_tour', `vehicle`='$phuong_tien', `tour_days`='$so_ngay', `description`='$mo_ta', `tour_condition`='$dieu_kien_huy_tour', `hotel_rate`=$danh_gia WHERE `tour_id`=$tour_id";
        $result = $this->database->update($query);
        $query_image = "UPDATE tour_image SET `img`='$hinh_anh' WHERE `tour_id`=$tour_id";
        $result_image = $this->database->update($query_image);
        return $result && $result_image;
    }

    public function addSchedule($tour_id, $day, $location, $description)
    {
        $query = "INSERT INTO tour_schedule (`location`, `description`, `day`, `tour_id`) VALUES ('$location', '$description', $day, $tour_id)";
        $deleted_row = $this->database->update($query);
        return $deleted_row;
    }

    public function deleteTour($tour_id)
    {
        $query1 = "DELETE FROM tour_schedule WHERE `tour_id`=$tour_id;";
        $query2 = "DELETE FROM tour_image WHERE `tour_id`=$tour_id";
        $query3 = "DELETE FROM tour WHERE `tour_id`=$tour_id";
        $this->database->delete($query1);
        $this->database->delete($query2);
        $this->database->delete($query3);

    }

    public function addTour($body)
    {
        $query = sprintf(
            "INSERT INTO tour (`tour_name`, `adult_price`, `child_price`, `tour_include`, `tour_exclude`, `tour_condition`, `vehicle`, `hotel_rate`, `tour_days`, `category_id`, `description`,`tour_cancel`) VALUES ('%s',%s,%s,'%s','%s','%s','%s',%s,'%s',%s,'%s','%s')",
            $body['ten-tour'],
            $body['gia-nguoi-lon'],
            $body['gia-tre-em'],
            $body['bao-gom'],
            $body['khong-bao-gom'],
            $body['dieu-kien-dat-tour'],
            $body['phuong-tien'],
            $body['danh-gia'],
            $body['so-ngay'],
            $body['danh-muc'],
            $body['mo-ta'],
            $body['dieu-kien-huy-tour']
        );
        $result = mysqli_query(Database::$link, $query);
        $tour_id_inserted = mysqli_insert_id(Database::$link);

        $insert_schedule = sprintf("INSERT INTO tour_schedule (`day`, `location`, `description`,`tour_id`) values (%s,'%s','%s',%s)", $body['day'], $body['dia-diem'], $body['mo-ta-lich-trinh'] ,$tour_id_inserted);
        $result2 = $this->database->insert($insert_schedule);
        $insert_image = sprintf("INSERT INTO tour_image (`img`, `tour_id`) values ('%s',%s)",$body['hinh-anh'] ,$tour_id_inserted);
        $result3 = $this->database->insert($insert_image);

        return $result && $result2 && $result3;
    }
}

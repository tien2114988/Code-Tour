<?php
class UserModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAllUsersData()
    {
        $query = "SELECT user_id, fullname, email, phone_number, avatar, address FROM user";
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

    public function deleteUser($user_id) {
        $del = "DELETE FROM booking WHERE user_id = '$user_id'";
        $del = $this->database->delete($del);
        if (!$del) {
            return false;
        }
        $query = "DELETE FROM user WHERE user_id = '$user_id'";
        $query = $this->database->delete($query);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}

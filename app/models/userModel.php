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
    public function checkExists($email, $username)
    {

        $query = "SELECT * FROM user WHERE email = '$email' OR username = '$username';";
        $data = $this->database->select($query);
        
        return $data;
    }

    public function getById($id){
        $query = "SELECT * FROM user WHERE user_id = $id;";
        $data = $this->database->select($query);      
         
        return $data->fetch_all(MYSQLI_ASSOC)[0];
    }
    public function update($fullname, $phone,$user_id, $address){
        $query = "UPDATE user SET fullname = '$fullname', phone_number = '$phone', address ='$address' WHERE user_id = $user_id";
        $data = $this->database->update($query);        
        return $data;
    }

    public function signup($email, $username, $password){
        $query = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";
        $data = $this->database->insert($query);
        return $data;
    }
    public function updatePassword($email, $password){
        $query = "UPDATE user SET password = '$password' Where email = '$email';";
        $data = $this->database->update($query);
        return $data;
    }
}

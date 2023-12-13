<?php
class UserModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
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
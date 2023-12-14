<?php
class ContactModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function insert($name,$address,$phone,$email,$description)
    {
        $query = "INSERT INTO contact (fullname,address,phone_number,email,content) VALUES ('$name','$address','$phone','$email','$description')";
        
        $data = $this->database->insert($query);
        
        return $data;
    }
}

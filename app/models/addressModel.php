<?php
class AddressModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    

    public function getById($id){
        $query = "SELECT * FROM address WHERE user_id = $id AND default_address = 1";
        $data = $this->database->select($query);        
        return $data;
    }
    public function update($detail, $id){
        $query = "UPDATE address SET address = '$detail', default_address = 1 WHERE user_id = $id";
        $data = $this->database->update($query);        
        return $data;
    }

    public function insert($detail, $id){
        $query = "INSERT INTO address (address,default_address,user_id) VALUES ('$detail',1,$id)";
        $data = $this->database->insert($query);        
        return $data;
    }
    
}
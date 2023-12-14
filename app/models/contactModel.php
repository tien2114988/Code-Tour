<?php

class ContactModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }
    public function getAll()
    {
        $query = "SELECT * FROM contact";
        $data = $this->database->select($query);
        return $data->fetch_all(MYSQLI_ASSOC);
    }

    
}


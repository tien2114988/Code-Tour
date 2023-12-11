<?php

class Database
{
    private static $host = 'localhost';
    private static $user = 'root';
    private static $pass = '';
    private static $dbname = 'travel';

    public static $link;
    public static $error;

    public function __construct()
    {
        $this->connectDB();
    }

    public static function connectDB()
    {
        try {
            self::$link = new mysqli(self::$host, self::$user, self::$pass, self::$dbname);
            if (self::$link->connect_error) {
                throw new Exception("Connect failed: " . self::$link->connect_error);
            }
            mysqli_set_charset(self::$link, 'utf8');
            // echo "Connected successfully";
            return self::$link;
        } catch (Exception $e) {
            echo "Connection error: " . $e->getMessage();
        }
    }
    public function closeDB()
    {
        self::$link = null;
    }

// Select or Read data
    public function select($query)
    {
        $result = self::$link->query($query) or
        die($this->link->error . __LINE__);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

// Insert data
    public function insert($query)
    {
        $insert_row = self::$link->query($query) or
        die($this->link->error . __LINE__);
        if ($insert_row) {
            return $insert_row;
        } else {
            return false;
        }
    }

// Update data
    public function update($query)
    {
        $update_row = self::$link->query($query) or
        die($this->link->error . __LINE__);
        if ($update_row) {
            return $update_row;
        } else {
            return false;
        }
    }

// Delete data
    public function delete($query)
    {
        $delete_row = self::$link->query($query) or
        die($this->link->error . __LINE__);
        if ($delete_row) {
            return $delete_row;
        } else {
            return false;
        }
    }

}

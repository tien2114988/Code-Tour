<?php
class GeneralModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getContact()
    {
        $query = $this->database->select("SELECT * FROM general LIMIT 1");
        if ($query) {
            return json_encode(mysqli_fetch_assoc($query), JSON_UNESCAPED_UNICODE);
        } else {
            return false;
        }
    }

    public function updateContact($address, $phone_number, $hotline, $email, $transfer_name, $account_number, $bank_name)
    {
        $query = "UPDATE general SET address = '$address', phone_number = '$phone_number', hotline = '$hotline', email = '$email', transfer_name = '$transfer_name', account_number = '$account_number', bank_name = '$bank_name' WHERE true LIMIT 1";
        if ($this->database->update($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function getAll()
    {
        $query = "SELECT * FROM general";
        $data = $this->database->select($query);
        return $data->fetch_all(MYSQLI_ASSOC)[0];
    }
}

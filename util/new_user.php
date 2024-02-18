<?php
class User {
    private $customerName;
    private $customerEmail;
    private $customerPhone;
    private $customerMessage;

    public function __construct($customerName, $customerEmail, 
        $customerPhone, $customerMessage)
    {
        $this->customerName = $customerName;
        $this->customerEmail = $customerEmail;
        $this->customerPhone = $customerPhone;
        $this->customerMessage = $customerMessage;
    }

    public function getCustomerName() {
        return $this->customerName;
    }
    public function setCustomerName($value) {
        $this->customerName = $value;
    }
    public function getCustomerEmail() {
        return $this->customerEmail;
    }
    public function setCustomerEmail($value) {
        $this->customerEmail = $value;
    }
    public function getCustomerPhone() {
        return $this->customerPhone;
    }
    public function setCustomerPhone($value) {
        $this->customerPhone = $value;
    }
    public function getCustomerMessage() {
        return $this->customerMessage;
    }
    public function setCustomerMessage($value) {
        $this->customerMessage = $value;
    }
}

class CustomerDB {
    public static function addCustomer($customerName, $customerEmail, $customerPhone, $customerMessage) 
    {
        $db = new Database();
        $dbConn = $db->getDbConn();

        if ($dbConn) {
            $query = "INSERT INTO customers (Name, Email, Number, Message)
            VALUES ('$customerName','$customerEmail','$customerPhone','$customerMessage')";
            
            return $dbConn ->query($query) === TRUE;     
        } else 
        {
            return false;
        }
    }
}
<?php
require_once('database.php');
require_once('new_user.php');

class Customer {
    public static function addCustomer($customer) {
        return CustomerDB::addCustomer(
            $customer->getCustomerName(),
            $customer->getCustomerEmail(),
            $customer->getCustomerPhone(),
            $customer->getCustomerMessage());
    }
}
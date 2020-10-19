<?php
/**
 * Author: Lauren Fasig
 * Date: 10/19/2020
 * File: invoice.class.php
 * Description:
 */

class Invoice implements Payable {

    private static $invoice_count;
    private $part_name;
    private $price;
    private $quantity;

    public function __construct($part_name, $price, $quantity) {
        $this->part_name = $part_name;
        $this->price = $price;
        $this->quantity = $quantity;
        self::$invoice_count = 0;
    }

    public function getPartName() {
        return $this->part_name;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getPaymentAmount() {
        return $this->price * $this->quantity;
    }

    public function getInvoiceCount() {
        return self::$invoice_count++;
    }

    public function toString() {
        echo "<h3>Part Name: " . $this->getPartName() . "</h3>";
        echo "<h3>Quantity: " . $this->getQuantity() . "</h3>";
        echo "<h3>Price: " . $this->getPrice() . "</h3>";
        echo "<h3>Payment: " . $this->getPaymentAmount() . "</h3>";

    }
}
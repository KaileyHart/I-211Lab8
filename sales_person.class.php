<?php
/**
 * Author: Lauren Fasig
 * Date: 10/19/2020
 * File: sales_person.class.php
 * Description:
 */

class SalesPerson extends Employee {

    private $sales;
    private $commission_rate;

    public function __construct($person, $emp_id, $year_of_services, $sales, $commission_rate) {
        parent::__construct($person, $emp_id, $year_of_services);
        $this->sales = $sales;
        $this->commission_rate = $commission_rate;
    }

    public function getSales() {
        return $this->sales;
    }

    public function getCommissionRate() {
        return $this->commission_rate;
    }

    public function getPaymentAmount() {
        // TODO: Implement getPaymentAmount() method.
    }

    public function toString() {
        parent::toString();
        echo "<h3>Sales: $" . $this->getSales() . "</h3>";
        echo "<h3>Commission Rate: $" . $this->getCommissionRate() . "</h3>";
    }
}
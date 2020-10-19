<?php
/**
 * Author: Lauren Fasig
 * Date: 10/19/2020
 * File: sectretary.class.php
 * Description:
 */

class Secretary extends Employee {

    private $wage;
    private $hours;

    public function __construct($person, $emp_id, $year_of_services, $wage, $hours) {
        parent::__construct($person, $emp_id, $year_of_services);
        $this->wage = $wage;
        $this->hours = $hours;
    }

    public function getWage() {
        return $this->wage;
    }

    public function getHours() {
        return $this->hours;
    }

    public function getPaymentAmount() {
        // TODO: Implement getPaymentAmount() method.
    }

    public function toString() {
        parent::toString();
        echo "<h3>Wage: $" . $this->getWage() . "</h3>";
        echo "<h3>Hours: " . $this->getHours() . "</h3>";
    }
}
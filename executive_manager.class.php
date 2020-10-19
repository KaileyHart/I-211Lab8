<?php
/**
 * Author: Lauren Fasig
 * Date: 10/19/2020
 * File: executive_manager.class.php
 * Description:
 */

class ExecutiveManager extends Manager {

    private $bonus;

    public function __construct($person, $emp_id, $year_of_services, $department, $salary, $bonus) {
        parent::__construct($person, $emp_id, $year_of_services, $department, $salary);
        $this->bonus = $bonus;
    }

    public function getBonus() {
        return $this->bonus;
    }

    public function getPaymentAmount() {
        return parent::getPaymentAmount();
    }

    public function toString() {
        parent::toString();
        echo "<h3>Bonus: $" . $this->getBonus() . "</h3>";
    }

}
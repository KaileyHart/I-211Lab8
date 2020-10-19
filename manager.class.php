<?php
/**
 * Author: Lauren Fasig
 * Date: 10/19/2020
 * File: manager.class.php
 * Description:
 */

class Manager extends Employee {

    private $department;
    private $salary;

    public function __construct($person, $emp_id, $year_of_services, $department, $salary) {
        parent::__construct($person, $emp_id, $year_of_services);
        $this->department = $department;
        $this->salary = $salary;
    }

    public function getDepartment() {
        return $this->department;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function getPaymentAmount() {
        return $this->salary;
    }

    public function toString() {
        parent::toString();
        echo "<h3>Department: " . $this->getDepartment() . "</h3>";
        echo "<h3>Salary: $" . $this->getSalary() . "</h3>";
        echo "<h3>Earning: $" . $this->getPaymentAmount() . "</h3>";
    }
}
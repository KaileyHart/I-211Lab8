<?php
/**
 * Author: Lauren Fasig
 * Date: 10/19/2020
 * File: employee.class.php
 * Description:
 */

abstract class Employee implements Payable {

    private static $emp_count = 0;
    private $person;
    private $emp_id;
    private $year_of_services;

    public function __construct($person, $emp_id, $year_of_services) {
        $this->person = $person;
        $this->emp_id = $emp_id;
        $this->year_of_services = $year_of_services;
        self::$emp_count;
    }

    public function getPerson() {
        return $this->person;
    }

    public function getEmpID() {
        return $this->emp_id;
    }

    public function getYears() {
        return $this->year_of_services;
    }

    public function getEmpCount() {
        return self::$emp_count++;
    }

    public function toString() {
        echo "<h3>Person: " . $this->getPerson() . "</h3>";
        echo "<h3>Employee ID: " . $this->getEmpID() . "</h3>";
        echo "<h3>Years of Service: " . $this->getYears() . "</h3>";

    }

}
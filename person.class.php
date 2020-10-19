<?php
/**
 * Author: Lauren Fasig
 * Date: 10/19/2020
 * File: person.class.php
 * Description:
 */

class Person {

    private $first_name;
    private $last_name;
    private $gender;
    private $ssn;

    public function __constructor($first_name, $last_name, $gender, $ssn) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        $this->ssn = $ssn;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getSsn() {
        return $this->ssn;
    }

    public function toString() {
        echo "<h3>Name: " . $this->getFirstName() . " " . $this->getLastName() . "</h3>";
        echo "<h3>Gender: " . $this->getGender() . "</h3>";
        echo "<h3>SSN: " . $this->getSsn() . "</h3>";
    }

}
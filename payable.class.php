<?php
/**
 * Author: Lauren Fasig
 * Date: 10/19/2020
 * File: payable.class.php
 * Description: contains interface which is implemented by employee and invoice classes
 */

interface Payable {

    public function getPaymentAmount();

    public function toString();

}
<?php
/**
 * Author: Lauren Fasig
 * Date: 10/19/2020
 * File: test_payable.php
 * Description:
 */

//convert a camel cased string to a underscored string
function camelCaseToUnderscore($str) {
    //store all characters in an array
    $characters = str_split($str);

    //covert the first character to a lowercase
    $characters[0] = strtolower($characters[0]);

    //exam all characters in the array
    //if a character is uppercase, replace it with a lowercase and prefix it with an underscore
    foreach ($characters as &$character) {
        if (ord($character) >= ord('A') && ord($character) <= ord('Z'))
            $character = '_' . strtolower($character);
    }

    //convert all elements in the array into a string and return the string
    return implode('', $characters);
}

function __autoload($class_name) {
    require_once camelCaseToUnderscore($class_name) . '.class.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client Program for Payable Class Hierarchy</title>
    <style>
    div {
        margin-top: 10px;
    }
    </style>
</head>
<body>
<?php

$invoice = new Invoice("samsung galaxy S7", "525.29", 1);
echo "<h1>Invoice</h1>";
echo "<div>" . $invoice->toString() . "</div>";
echo "<br><br>================================================================";

$invoice2 = new Invoice("Stainless Steel Dog Bowl", "9.99", "2");
echo "<h1>Invoice</h1>";
echo "<div>" . $invoice2->toString() . "</div>";
echo "<br><br>================================================================";

$manager = new Manager("Carter Smith", "10299932", 5, "Research and Development", 3800);
echo "<h1>Manager</h1>";
echo "<div>" . $manager->toString() . "</div>";
<?php
require_once __DIR__ . '/classes/Employee.php';

$samuele = new Employee("Samuele", "samuele@gmail.com", 3);

try {
	$samuele->setSconto("ciao");
} catch(Exception $e) {
}

$samuele->lng = "-77.0364";
$samuele->lat = "38.8951";

echo $samuele->getAddress();
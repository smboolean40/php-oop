<?php
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Employee.php';

$pippo = new User("Pippo", "pippo@gmail.com");

$pippo->setSconto(20);

$pluto = new User("Pluto", "pluto@gmail.com");

$pluto->setSconto(70);

$samuele = new Employee("Samuele", "samuele@gmail.com", 3);

$samuele->setSconto(30);

var_dump($samuele);

// echo "<h1>lo Sconto di : {$pluto->nome} è {$pluto->getSconto()} %</h1>";


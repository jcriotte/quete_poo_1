<?php

require_once 'Bicycle.php';
require_once 'Car.php';
$bike = new Bicycle($color = 'blue');
var_dump($bike);

$jcCar = new Car($color = 'red', $nbSeats = 2, $energy = 'essence');
var_dump($jcCar);

$bike->forward();
echo $jcCar->start();
$jcCar->forward();

var_dump($bike);
var_dump($jcCar);

$bike->brake();
$jcCar->brake();

var_dump($bike);
var_dump($jcCar);

echo $bike->brake();
echo $jcCar->brake();

var_dump($bike);
var_dump($jcCar);

?>

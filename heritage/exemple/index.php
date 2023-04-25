<?php 


require_once "Vehicle.php";
require_once "Car.php";
require_once "Truck.php";
require_once "Boat.php";

$ford   = new Car("Ford");
$toyota = new Car("Toyota");
$truck1 = new Truck("Mack");
$truck2 = new Truck("Tesla");
$boat1  = new Boat("Titanic");


$ford->start(); echo "<br>";
$toyota->start(); echo "<br>";
$truck1->start(); echo "<br>";
$truck2->start(); echo "<br>";
$boat1->start(); echo "<br>";
echo "<hr>";


echo $ford::WHEELS; echo "<br>";
echo $toyota::WHEELS; echo "<br>";
echo $truck1::WHEELS; echo "<br>";
echo $truck2::WHEELS; echo "<br>";
echo $boat1::WHEELS; echo "<br>";
echo "<hr>";

echo Car::WHEELS; echo "<br>";
echo Car::WHEELS; echo "<br>";
echo Truck::WHEELS; echo "<br>";
echo Truck::WHEELS; echo "<br>";
echo Boat::WHEELS; echo "<br>";
echo "<hr>";


echo $ford->getWheels(); echo "<br>";
echo $toyota->getWheels(); echo "<br>";
echo $truck1->getWheels(); echo "<br>";
echo $truck2->getWheels(); echo "<br>";
echo $boat1->getWheels(); echo "<br>";
echo "<hr>";
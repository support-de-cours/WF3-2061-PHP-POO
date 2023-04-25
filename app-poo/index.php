<?php

require_once "vendor/autoload.php";

use App\Car;

$car1 = new Car("Tesla");

echo $car1->getBrand(); 
echo "<br>";
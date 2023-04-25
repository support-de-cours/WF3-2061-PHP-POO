<?php

require_once "vendor/autoload.php";

use App\Controller\Car;

$car1 = new Car("Tesla");

echo $car1->getBrand(); 
echo "<br>";
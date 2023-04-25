<?php

require_once "vendor/autoload.php";

use MaSuperApp\V2\Controller\Car;

$car1 = new Car("Tesla");

echo $car1->getBrand(); 
echo "<br>";
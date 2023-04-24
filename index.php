<?php

// /// Inclusion de la classe
// require_once "classes/MyClass.php";

// /// Création d'un objet
// /// On utilise la classe (le modéle) pour créer un objet

// /// Instance de l'objet
// $myObject = new MyClass;

// /// Référence à une propriété de l'objet
// echo $myObject->myProperty;
// echo "<br>";

// /// Référence à une méthode / action de l'objet
// echo $myObject->myMethod();
// echo "<br>";

// /// Référence à une constante de la class
// echo MyClass::MY_CONSTANT;
// echo "<br>";


// Inclusion de la classe Car 
require_once "classes/Car.php";
require_once "classes/Character.php";



// Instance de l'objet depuis la classe Car
// Définition de propriété lors de l'instance de l'objet
$myFirstCar = new Car("Ford", "F-150", "black");
$mySecondCar = new Car("Toyota", "Tacoma", "gray");

$character_1 = new Character("Bob");
$john = new Character("John");

echo "Voiture 1 - Marque : {$myFirstCar->getBrand()}";
echo "<br>";
echo "Voiture 1 - modele : {$myFirstCar->getModel()}";
echo "<br>";
echo "Voiture 1 - Couleur : {$myFirstCar->getColor()}";
echo "<br>";
echo "Voiture 1 - Is Started : ". ($myFirstCar->getIsStarted() ? "Yes" : "No");
echo "<br>";

$myFirstCar->setDriver( $character_1 );

echo "Voiture 1 - Driver : ". $myFirstCar->getDriver()->getName();
echo "<br>";


// Modification des proprioétés
$mySecondCar->setColor("red");
// $mySecondCar->brand = "Fiat";


echo "<hr>";
echo "Voiture 2 - Marque : {$mySecondCar->getBrand()}";
echo "<br>";
echo "Voiture 2 - modele : {$mySecondCar->getModel()}";
echo "<br>";
echo "Voiture 2 - Couleur : {$mySecondCar->getColor()}";
echo "<br>";
echo "Voiture 2 - Is Started : ". ($mySecondCar->getIsStarted() ? "Yes" : "No");
echo "<br>";

$mySecondCar->start();

echo "Voiture 2 - Is Started : ". ($mySecondCar->getIsStarted() ? "Yes" : "No");
echo "<br>";

$mySecondCar->stop();

echo "Voiture 2 - Is Started : ". ($mySecondCar->getIsStarted() ? "Yes" : "No");
echo "<br>";

echo "<hr>";
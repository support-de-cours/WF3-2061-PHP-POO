<?php

// Déclaration de la classe
// La classe est comme un modéle
class MyClass 
{
    // CONSTANTES
    // --

    // Constante dans une classe
    const MY_CONSTANT = "This is a constant";



    // PROPERTIES
    // --

    // Variable dans une classe
    // s'appelle une "propriété"
    public $myProperty = "This is a property";



    // METHODS
    // --

    // Le constructeur serat déclenché lors de l'instance de la classe (creation de l'objet)
    public function __construct()
    {
        $this->myProperty = "This is the modified property value !!!!!!!";
        echo "I am the constructor of MyClass<br>";
    }

    // Le constructeur serat déclenché lors de la destruction de l'objet'
    public function __destruct()
    {
        echo "I am the destructor of MyClass<br>";
    }

    // fonction dans une classe
    // s'appelle une "méthode"
    public function myMethod()
    {
        return "This is a function";
    }
}
<?php 

namespace Mine;

class A 
{
    public $name = "Ma Classe A";
}

class B 
{
    public $name = "Ma Classe B";
}


// -----

namespace Other;

class A 
{
    public $name = "Autre Classe A";
}

class B 
{
    public $name = "Autre Classe B";
}


// ---------

$a1 = new \Mine\A;
$b1 = new \Mine\B;

$a2 = new \Other\A;
$b2 = new \Other\B;

echo $a1->name; echo "<br>";
echo $b1->name; echo "<br>";

echo $a2->name; echo "<br>";
echo $b2->name; echo "<br>";
<?php 

function autoload_my_classes( $arg )
{
    $arg = str_replace("\\", "/", $arg);

    // echo $arg;
    // echo "<br>";

    $file = "{$arg}.php";
    // echo $file;
    // echo "<br>";

    require_once $file;
}
spl_autoload_register( "autoload_my_classes" );



$car1 = new \Controller\Car;
$a1 = new \Mine\A;
$b1 = new \Mine\B;
$a2 = new \Other\A;
$b2 = new \Other\B;

echo $a1->name; echo "<br>";
echo $b1->name; echo "<br>";
echo $a2->name; echo "<br>";
echo $b2->name; echo "<br>";
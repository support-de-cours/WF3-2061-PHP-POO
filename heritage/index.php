<?php 

require_once "MyGrandParent.php";
require_once "MyParent.php";
require_once "MyChild.php";


$parent = new MyParent;
$child = new MyChild;

?>

Parent Lastname : <?= $parent->getLastname() ?> <br>
Child Lastname : <?= $child->getLastname() ?> <br>
Child Lastname : <?= $child->getChildLastname() ?> <br>


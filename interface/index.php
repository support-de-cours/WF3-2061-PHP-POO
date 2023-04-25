<?php

require_once "interface_a.php";
require_once "interface_b.php";
require_once "abstract_class.php";
require_once "master_class.php";

$myObject = new master_class();

$myObject->doSomething("Method"); echo "<br>";
$myObject->doAnotherThing("Method"); echo "<br>";
$myObject->doSomethingFromAbstractClass(); echo "<br>";


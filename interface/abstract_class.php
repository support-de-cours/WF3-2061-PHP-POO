<?php 

abstract class abstract_class implements A, B
{
    public function doSomethingFromAbstractClass()
    {
        echo "Do something from abstract class";
    }

    public function doSomething(string $var = "")
    {
        echo "This is my $var";
    }

    public function doAnotherThing(string $a)
    {
        echo "This is another thing $a";
    }
}
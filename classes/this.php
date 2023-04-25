<?php 

class MyAwesomeThing
{
    private string $myProperty = "Default property value";
    private string $mySecondProperty = "I'm the second property value !";
    
    /**
     * Get the value of myProperty
     */ 
    public function getMyProperty(): string
    {
        return $this->myProperty;
    }

    /**
     * Set the value of myProperty
     *
     * @return  self
     */ 
    public function setMyProperty(string $myProperty)
    {
        $this->myProperty = $myProperty;

        return $this;
    }




    /**
     * Get the value of mySecondProperty
     */ 
    public function getMySecondProperty()
    {
        return $this->mySecondProperty;
    }

    /**
     * Set the value of mySecondProperty
     *
     * @return  self
     */ 
    public function setMySecondProperty($mySecondProperty)
    {
        $this->mySecondProperty = $mySecondProperty;

        return $this;
    }
}

$myObject = new MyAwesomeThing;

echo $myObject->getMyProperty();
echo "<br>";
echo $myObject->getMySecondProperty();
echo "<br>";
echo "<br>";

$myObject
    ->setMyProperty("This is a new property value")
    ->setMySecondProperty("This is a second property value .......")
;

echo $myObject->getMyProperty();
echo "<br>";
echo $myObject->getMySecondProperty();
echo "<br>";
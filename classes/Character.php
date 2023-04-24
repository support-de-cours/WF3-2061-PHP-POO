<?php 

class Character
{
    private ?string $name = null;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }
}
<?php 

class MyGrandParent 
{
    protected string $lastname = "DOE";

    /**
     * Get the value of lastname
     */ 
    public final function getLastname()
    {
        return $this->lastname;
    }
}
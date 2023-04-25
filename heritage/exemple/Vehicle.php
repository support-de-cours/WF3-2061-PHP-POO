<?php 

abstract class Vehicle 
{
    private ?string $brand = null;
    private ?string $color = null;

    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function getWheels()
    {
        if (defined("WHEELS")) // permet de controler l'existance d'une constante
        {
            return static::WHEELS;
        }

        return null;
    }

    public abstract function start();
    // {
    //     echo "This vehicle ({$this->brand}) is started";
    // }
    
    public function stop()
    {
        echo "This vehicle is stoped";
    }
}
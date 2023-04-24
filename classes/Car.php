<?php

class Car 
{
    /**
     * Number of wheels
     * 
     * @var int
     */
    const WHEELS = 4;

    /**
     * The brand name of the car
     *
     * @var string|null
     */
    private ?string $brand = null;

    /**
     * The model name of the car
     *
     * @var string|null
     */
    private ?string $model = null; 

    /**
     * The color of the car
     *
     * @var string|null
     */
    private ?string $color = null; 

    /**
     * The car state, started or not
     *
     * @var boolean
     * @default false
     */
    private bool $isStarted = false;

    private ?Character $driver = null;


    public function __construct($brand, $model, $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }


    /**
     * Method to start the car
     *
     * @return void
     */
    public function start(): void
    {
        $this->isStarted = true;
    }

    /**
     * Method to stop the car
     *
     * @return void
     */
    public function stop(): void 
    {
        $this->isStarted = false;
    }

    /**
     * Return the brand name
     *
     * @return string|null
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * Get the model name of the car
     *
     * @return  string|null
     */ 
    public function getModel(): ?string
    {
        return $this->model;
    }

    /**
     * Get the color of the car
     *
     * @return  string|null
     */ 
    public function getColor(): ?string
    {
        return $this->color;
    }
    /**
     * Set the color of the car
     *
     * @param string $color
     * @return self
     */
    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the car state, started or not
     *
     * @return  boolean
     */ 
    public function getIsStarted(): bool
    {
        return $this->isStarted;
    }

    /**
     * Get the value of driver
     */ 
    public function getDriver(): ?Character
    {
        return $this->driver;
    }

    /**
     * Set the value of driver
     *
     * @return  self
     */ 
    public function setDriver(Character $driver): self
    {
        $this->driver = $driver;

        return $this;
    }
}
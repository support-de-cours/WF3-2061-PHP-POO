<?php 

namespace App\Abstract;

abstract class Vehicle
{
    private ?string $brand = null;
    private bool $isStarted = false;

    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of isStarted
     */ 
    public function getIsStarted(): bool
    {
        return $this->isStarted;
    }

    /**
     * Set the value of isStarted
     *
     * @return  self
     */ 
    public function setIsStarted(bool $isStarted): self
    {
        $this->isStarted = $isStarted;

        return $this;
    }

    public function start(): self
    {
        $this->isStarted = true;

        return $this;
    }

    public function stop(): self
    {
        $this->isStarted = false;

        return $this;
    }
}
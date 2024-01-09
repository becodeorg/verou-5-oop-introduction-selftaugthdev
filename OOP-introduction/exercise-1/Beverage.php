<?php 

class Beverage 
{
    public string $color;
    public float $price;
    public string $temperature;

    // Constructor
    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    // Function
    public function getInfo(): string
    {
    return "This beverage is $this->temperature and $this->color.<br>Temperature: $this->temperature";
    }

}

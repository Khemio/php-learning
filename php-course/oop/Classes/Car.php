<?php

class Car {
    // Properties / Fields
    private $brand;
    private $color;

    // Constructor
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Getters & Setters
    public function getBrand() {
        return $this->brand;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $allowedColor = [
            "red",
            "blue",
            "yellow",
            "green"
        ];

        if(in_array($color, $allowedColor)) {
            $this->color = $color;
        }

    }

    // Method
    public function getCarInfo() {
        return "Brand: {$this->brand}, Color: {$this->color}";
    }
}

// $car01 = new Car('Volovo', 'green');
// $car02 = new Car('BMW', 'bule');

// echo $car01->getCarInfo();

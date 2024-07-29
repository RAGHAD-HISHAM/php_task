<?php

class car{
    public $make;
    public $model;
    public $vin;

    public function __construct($make, $model, $vin) {
        $this->make = $make;
        $this->model = $model;
        $this->vin = $vin;
    }
    public function __destruct() {
        echo "The car is destroyed.\n";
    }
    public function getDetails() {
        echo "this car model is {$this->model}, and {$this->make} make, its vin is {$this->vin}";
    }
}

class Inventory {
    public $cars = [];
    
    public function addCar(Car $car) {
        $this->cars[$car->vin] = $car;
    }

    // Public method to remove a car from the inventory by VIN
    public function removeCar($vin) {
        if (isset($this->cars[$vin])) {
            unset($this->cars[$vin]);
            echo "Car with VIN '{$vin}' removed from inventory.\n";
        } else {
            echo "Car with VIN '{$vin}' not found in inventory.\n";
        }
    }

    // Public method to list all cars in the inventory
    public function listCars() {
        foreach ($this->cars as $car) {
            echo $car->getDetails() . "\n";
        }
    }
}


?>
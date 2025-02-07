<?php

namespace Inheritance;
require_once './Vehicle.php';

class Car extends Vehicle
{
    private $seatingCapacity;

    public function __construct($vehicleId, $brand, $model, $seatingCapacity)
    {
        parent::__construct($vehicleId, $brand, $model);
        $this->seatingCapacity = $seatingCapacity;
    }

    public function calculateCarRentalCost(int $days): string
    {
        $calculatedAmount = 1000 * $days + $this->seatingCapacity * 50;
        return "Rental cost for " . $days . " days: " . "is: " . $calculatedAmount;
    }
}

$car = new Car(
    "11002255",
    "Ford",
    "Shelby GT500",
    2
);
 $car->rentVehicle();
try {
    $car->returnVehicle();
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo $car->calculateCarRentalCost(5);
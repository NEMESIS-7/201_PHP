<?php

namespace Polymorphism_TransportationMgtSystem;
require_once 'Vehicle.php';
require_once 'TransportationManager.php';
class Car extends Vehicle
{
    private $fuelEfficiency;

    public function __construct($vehicleId, $model, $fuelLevel, $fuelEfficiency){
        parent::__construct($vehicleId, $model, $fuelLevel);
        $this->fuelEfficiency = $fuelEfficiency;
    }
    public function calculateRange() : float
    {
        return parent::getFuelLevel() * $this->fuelEfficiency;
    }
}

$vehicle = new Car(
    "C001",
    "Sedan",
    50,
    15
);

$vehicle->refuel(5.2);

$ops = new TransportationManager();
$ops->operateVehicle($vehicle);


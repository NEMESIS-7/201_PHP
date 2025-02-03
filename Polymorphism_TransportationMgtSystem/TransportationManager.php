<?php

namespace Polymorphism_TransportationMgtSystem;
require_once 'Vehicle.php';
require_once 'Car.php';

class TransportationManager
{
    public function operateVehicle(Vehicle $vehicle): void
    {
        $vehicle->calculateRange();
    }
}

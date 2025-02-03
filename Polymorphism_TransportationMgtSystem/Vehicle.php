<?php

namespace Polymorphism_TransportationMgtSystem;

abstract class Vehicle
{
    private $vehicleId;
    private $model;
    private $fuelLevel;

    /**
     * @param $vehicleId
     * @param $model
     * @param $fuelLevel
     */
    public function __construct($vehicleId, $model, $fuelLevel)
    {
        $this->vehicleId = $vehicleId;
        $this->model = $model;
        $this->fuelLevel = $fuelLevel;
    }


    public function refuel(float $liters):void{
        $this->fuelLevel += $liters;
        echo $this->fuelLevel;
    }

    abstract public function calculateRange();

    public function getFuelLevel(){
        return $this->fuelLevel;
    }
}
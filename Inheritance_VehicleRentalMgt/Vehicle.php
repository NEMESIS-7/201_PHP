<?php

namespace Inheritance;

class Vehicle
{
    private $vehicleId;
    private $brand;
    private $model;
    private $isAvailable;

    public function __construct($vehicleId,
                                $brand,
                                $model
    )
    {
        $this->vehicleId = $vehicleId;
        $this->brand = $brand;
        $this->model = $model;
        $this->isAvailable = true;
    }

    public function getVehicleId() : string{
        return $this->vehicleId;
    }

    public function getBrand() : string{
        return $this->brand;
    }
    public function getModel() : string{
        return $this->model;
    }
    public function isAvailable() : bool{
        return $this->isAvailable;
    }

    public function setAvailable(bool $isAvailable) : void{
        $this->isAvailable = $isAvailable;
    }
    public function setVehicleId(string $vehicleId) : void{
        $this->vehicleId = $vehicleId;
    }
    public function setBrand(string $brand) : void{
        $this->brand = $brand;
    }
    public function setModel(string $model) : void{
        $this->model = $model;
    }
    public function rentVehicle(): void
    {
        if ($this->isAvailable) {
            $this->isAvailable = false;
            echo "Vehicle ", $this->vehicleId, " rented successfully";
        } else {
            echo "Vehicle ", $this->vehicleId, " not available";
        }
    }

    /**
     * @throws \Exception
     */
    public function returnVehicle(): void
    {
        if ($this->isAvailable) {
            throw new \Exception("Vehicle ", $this->vehicleId , " already returned");
        }else{
            $this->isAvailable = true;
            echo "Vehicle ", $this->vehicleId, " returned successfully";
        }
    }
}
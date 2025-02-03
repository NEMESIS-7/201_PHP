<?php

namespace Abstraction_PayrollSystem;

abstract class Employee
{
    private $name;
    private $employeeId;

    public function __construct($name, $employeeId){
        $this->employeeId = $employeeId;
        $this->name = $name;
    }
    public function getName(): string{
        return $this->name;
    }
    public function getEmployeeId(): string{
        return $this->employeeId;
    }
    abstract public function calculatePay();
}
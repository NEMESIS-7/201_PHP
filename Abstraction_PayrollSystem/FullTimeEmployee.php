<?php

namespace Abstraction_PayrollSystem;
require_once 'Employee.php';
class FullTimeEmployee extends Employee
{
    private $salary;

    public function __construct($name, $employeeId, $salary)
    {
        parent::__construct($name, $employeeId);
        $this->salary = $salary;
    }

    public function calculatePay(): string
    {
        return "Full Time Employee Salary: {$this->salary}";
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function toString()
    {
        echo "Full time employee details \n",
        "Name: ", $this->getName(), "\n",
        "Salary: $", $this->getSalary(), "\n",
        "Employee ID: ", $this->getEmployeeId(), "\n";
    }
}

$fullTEmployee = new FullTimeEmployee(
    "Future",
    "220033214",
    50000
);
echo $fullTEmployee->toString();

echo $fullTEmployee->calculatePay() . "\n";

$fullTEmployee1 = new FullTimeEmployee(
    "Maverick",
    "122023516",
    60000
);
echo $fullTEmployee1->toString();
echo $fullTEmployee1->calculatePay();

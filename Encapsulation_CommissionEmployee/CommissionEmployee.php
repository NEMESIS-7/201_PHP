<?php

namespace src;
class CommissionEmployee
{
    private $firstName;
    private $lastName;
    private $socialSecurityNumber;
    private $grossSales;
    private $commissionRate;

    /**
     * @throws \Exception
     */
    function __construct($firstName, $lastName, $socialSecurityNumber, $commissionRate, $grossSales)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->socialSecurityNumber = $socialSecurityNumber;

        if ($this->grossSales >= 0){
            $this->grossSales = $grossSales;
        }else{
            throw new \Exception("Commission rate must be greater than 0");
        }

        if ($this->commissionRate < 0 || $this->commissionRate > 1) {
            throw new \Exception("Commission rate must be between 0 and 1");
        }else{
            $this->commissionRate = $commissionRate;
        }
    }

    public function earnings(): float|int
    {
        return ($this->grossSales * $this->commissionRate);
    }

    public function toString(): string{
        return  "Employee first name: " . $this->firstName . "\n"
            . "Employee last name: " . $this->lastName . "\n"
            . "Employee social security number: " . $this->socialSecurityNumber . "\n"
            . "Employee commission rate: " . $this->commissionRate . "\n";

    }
}

$employee = new CommissionEmployee(
    "Future",
    "Hendrix",
    "112233445566",
    0.55,
    50000
);

echo "The employee's total earning is: ", $employee->earnings(); echo "\n";

echo $employee->toString();
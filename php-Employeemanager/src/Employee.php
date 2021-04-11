<?php

namespace src;

class Employee
{
    private $lastName;
    private $firstName;
    private $dateOfBirth;
    private $address;
    private $position;

    function __construct($lastName,
                         $firstName,
                         $dateOfBirth,
                         $address,
                         $position)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
        $this->position = $position;
    }
}

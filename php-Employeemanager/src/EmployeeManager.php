<?php

namespace src;

class EmployeeManager
{
    private static $employees;
    protected $filePath;

    public function __construct($filePath)
    {
        self::$employees = [];
        $this->filePath = $filePath;
    }

    public function add($employee)
    {
        self::$employees[] = $employee;
    }

    function readFile()
    {
        $dataJson = file_get_contents($this->filePath);
        return json_decode($dataJson);
    }


}
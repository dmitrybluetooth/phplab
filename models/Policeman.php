<?php


namespace models;


class Policeman extends Person
{
    private $salary;
    private $years;

    public function __construct($name, $age, $salary, $years)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
        $this->years = $years;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $years
     */
    public function setYears($years): void
    {
        $this->years = $years;
    }

    /**
     * @return mixed
     */
    public function getYears()
    {
        return $this->years;
    }
}
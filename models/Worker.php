<?php

namespace models;

class WorkerOne
{
    public $name;
    public $age;
    public $salary;
}

class WorkerTwo
{
    private $name;
    private $age;
    private $salary;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

include_once(ROOT . '/Worker/WorkerThree.php');
include_once(ROOT . '/Worker/WorkerFour.php');
include_once(ROOT . '/Worker/WorkerFive.php');

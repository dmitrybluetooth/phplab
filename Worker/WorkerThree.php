<?php

class WorkerThree
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
        if ($this->checkAge($age))
        {
            $this->age = $age;
        }
    }
    public function getAge()
    {
        return $this->age;
    }

    private function checkAge($age)
    {
        return $age>=1 and $age<=100;
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

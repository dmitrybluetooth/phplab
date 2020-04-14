<?php


namespace models;


class Car
{
    public $door;
    public $cost = 1000;
    public $color;
    public $wheel;
    public $fuel;
    CONST A = 2;
    CONST B = 5;
    CONST C = ID_ACCOUNT;

    public function __construct($door, $cost, $color, $wheel, $fuel)
    {
        $this->door = $door;
        $this->cost = $cost;
        $this->color = $color;
        $this->wheel = $wheel;
        $this->fuel = $fuel;
    }

    public function fuelСonsumption()
    {

    }

    public static function getMaxConstant()
    {

    }
}
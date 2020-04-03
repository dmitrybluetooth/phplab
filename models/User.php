<?php


namespace models;


class User implements iUser
{
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public static function compare($user1, $user2)
    {
        if(!($user1 && $user2 instanceof User)) return false;
        foreach ($user1 as $key=>$value)
        {
            if($value != $user2->{$key}) return false;
        }
        return true;
    }

    public static function compare2($user1, $user2)
    {
        if ($user1 === $user2) return true;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

}
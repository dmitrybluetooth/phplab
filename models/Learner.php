<?php


namespace models;


class Learner extends Person
{
    private $stipend;
    private $course = ['A', 'B', 'C'];

    /**
     * @param mixed $stipend
     */
    public function setStipend($stipend): void
    {
        $this->stipend = $stipend;
    }

    /**
     * @return mixed
     */
    public function getStipend()
    {
        return $this->stipend;
    }

    /**
     * @param mixed $course
     */
    public function setCourse($course): void
    {
        $this->course = $course;
    }

    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }
}
<?php

class MotorCycle
{
    public $make;
    public $model;
    public $year;
    function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    function get_make()
    {
        return "Car make: ";
    }
    function set_make()
    {
        return "{$this->make}\n";
    }

    function get_model()
    {
        return "Car model: ";
    }
    function set_model()
    {
        return "{$this->model}\n";
    }

    function get_year()
    {
        return "Car year: ";
    }
    function set_year()
    {
        return "{$this->year}";
    }
}

$bike = new MotorCycle("Toyta", "Corolla", "2015");
echo $bike->get_make(). $bike->set_make();
echo $bike->get_model(). $bike->set_model();
echo $bike->get_year(). $bike->set_year();
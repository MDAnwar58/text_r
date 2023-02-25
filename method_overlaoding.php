<?php

class MotorCycle
{
    private $parameter;
    function __construct($displacement, $capacity, $mileage)
    {
        $this->parameter = [];
        $this->parameter['mileage'] = $mileage;
        $this->parameter['displacement'] = $displacement;
        $this->parameter['capacity'] = $capacity;
    }

    // function getDisplacement()
    // {
    //     return $this->parameter['displacement'];
    // }

    // function setDisplacement($displacement)
    // {
    //     $this->parameter['displacement'] = $displacement;
    // }

    function __isset($name)
    {
        if(!isset($this->parameter[$name]))
        {
            echo "{$name} not found";
            return false;
        }
        return true;
    }
    function __unset($name)
    {
        print_r($this->parameter);
        unset($this->parameter[$name]);
        print_r($this->parameter);
    }
    function __get($name)
    {
        echo $this->parameter[$name]; // $this->displacement
    }
    function __set($name, $value)
    {
        echo $this->parameter[$name] = $value; // $this->displacement
    }

    function __call($name, $arguments)
    {
        if('run' == $name)
        {
            if($arguments)
            {
                echo "I'm Running at {$arguments[0]}";
            }else
            {
                echo "I'm Not Runing";
            }
        }
    }

    static function __callStatic($name, $arguments)
    {
        echo "Static Call";
    }
}

MotorCycle::wash();

$pulser = new MotorCycle('150cc', '16ltr', '40kmph');


if(isset($popular->tiresize))
{
    echo "Found\n";
}else
{
    echo "not found\n";
}

unset($pulser->mileage);
$pulser->run('100kmph');
<?php

class Student
{
    private $name;
    private $age;
    private $class;

    function __construct($name='', $age='', $class='')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop)
    {
        return strtoupper($this->$prop);
    }
    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }
    // function getName()
    // {
    //     return $this->name;
    // }
    // function setName($name)
    // {
    //     $this->name = $name;
    // }
    // function getAge()
    // {
    //     return $this->age;
    // }
    // function setAge($age)
    // {
    //     $this->age = $age;
    // }
    // function getClass()
    // {
    //     return $this->class;
    // }
    // function setClass($class)
    // {
    //     $this->class = $class;
    // }
}

$R = new Student('anwar sayeed', '22', '10');
$R->name = "Kader";
echo $R->name;
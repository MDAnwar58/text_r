<?php

class Human
{
    public $name;
    
    function sayHi()
    {
        echo "Assalamu alaikum my name is {$this->name}.";
    }
    function sayName()
    {
        echo "what is your name?\n";
    }
}

$h1 = new Human();
$h1->name = "MD Anwar Sayeed Saif Kader"; // set

// $h1->sayName();
$h1->sayName();
$h1->sayHi();
// echo "$h1->name\n"; // get
// $c1->sayHi();
// $d1->sayHi();
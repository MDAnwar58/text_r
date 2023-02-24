<?php

define('Ok', 123);

class MyClass
{
    const CITY = "Dhaka";

    function sayhi()
    {
        echo "Hi From ".self::CITY;
    }
}

$city = new MyClass();
$city->sayhi();
// echo MyClass::CITY;
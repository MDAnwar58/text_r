<?php

class Planet
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
}

$e = new Planet('Earth');
$e2 = $e;
$e1 = new Planet('Earth');
$e1 = new Planet('Mars');

if($e == $e2)
{
    echo "Similar Planet";
}else
{
    echo "It is not Similar Planet";
}
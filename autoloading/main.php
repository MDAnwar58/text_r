<?php

function autoload($name)
{
    if(strpos($name, "Planet_")!==false)
    {
        $filename = str_replace("Planet_", "", $name);
        include strtolower("planets/{$filename}.php");
    }else
    {
        // include strtolower("{$name}.php"); // it's right or that
        if(!class_exists($name))
        {
            include strtolower("{$name}.php"); // it's right
        }
    }
}

spl_autoload_register('autoload');

(new Bike)->getType();
(new Planet_Mars)->getName();
(new Spaceship)->launch();
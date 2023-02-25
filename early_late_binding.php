<?php

// // late bindings
// class Planet
// {
//     static function echoName()
//     {
//         echo static::getName();
//     }

//     static function getName()
//     {
//         return "Planet";
//     }
// }

// class Earth extends Planet
// {
//     static function getName()
//     {
//         return "Earth";
//     }
// }

// Earth::echoName();


// early bindings
class Planet
{
    static function echoName()
    {
        echo self::getName();
    }

    static function getName()
    {
        return "Planet";
    }
}

class Earth extends Planet
{
    static function getName()
    {
        return "Earth";
    }
}

Earth::echoName();
<?php

class A
{
    static $name;
    static function sayHi()
    {
        self::$name = "Hello";
        echo self::$name." From A\n";
    }
}
class B extends A
{
    static function sayHi()
    {
        parent::sayHi();
        echo parent::$name." From B\n";
    }
}

B::sayHi();

echo B::$name;
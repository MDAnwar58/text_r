<?php

class MathCalculator
{
    private $number;
    static $name;
    static function fibonacci($n)
    {
        echo self::$name."\n";
        self::doSomeThings();
        echo "Fibonacci series up to {$n}\n";
    }

    static function doSomeThings()
    {
        echo "Doings somethings\n";
    }

    function factorial($n)
    {
        self::$name = "ABCD";
        self::doSomeThings();
        $this->doSomeThings();
        $this->number = 12;
        echo "Calculator fatorial of {$n}\n";
    }
}

$mathc = new MathCalculator();
$mathc->factorial(8);

MathCalculator::fibonacci(7);

echo MathCalculator::$name;
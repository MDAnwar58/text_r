
<?php

interface BaseAnimal
{
    function isActive();
    function canEat($param1, $param2);
    function bread();
}

class Animal implements BaseAnimal
{
    function isActive(){}
    function canEat($param1, $param2){}
    function bread(){}
}

interface BaseHuman extends BaseAnimal
{
    public function canTalk();
}

class Human implements BaseHuman
{
    function isActive()
    {}
    function canEat($param1, $param2)
    {}
    function bread()
    {}
    function canTalk()
    {}
}
$animal = new Animal();
$h = new Human();
echo $animal instanceof BaseHuman;


abstract class AbstractHuman implements BaseHuman
{
    abstract public function run();

    function eat()
    {
        echo "i am eating";
    }
}
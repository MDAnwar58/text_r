<?php

class DistritCollaction implements IteratorAggregate, Countable
{
    private $districts;

    function __construct()
    {
        $this->districts = array();
    }

    function add($district)
    {
        array_push($this->districts, $district);
    }

    // function getDistricts()
    // {
    //     return $this->districts;
    // }

    function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts);
    }
    function count():int
    {
        return count($this->districts);
    }
}

$districts =new DistritCollaction;
$districts->add('Khulna');
$districts->add('Satkhira');
$districts->add('Jinaidoha');
echo count($districts)."\n";
foreach($districts as $district)
{
    echo "Khulna Division's District ".$district."\n";
}
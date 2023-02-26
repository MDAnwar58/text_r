<?php
namespace Project;

use MotorCycle;

// use \Project\Bike;
include "c1.php";
include "c2.php";
use \Project\Motorcycles\Bike as Hornat;
use \Project\Bike as Pluser;

$b = new Hornat();
echo $b->getName();

$b = new Bike();
echo $b->getName();

$b = new Pluser();
echo $b->getName();
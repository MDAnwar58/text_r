<?php
namespace Astronomy;
include "planet.php";
include "earth.php";

// $planet = new Planets\Planet(); // unqlifided
$planet = new Planets\Earth(); // unqlifided
// $planet = new \Astronomy\Planets\Planet(); // qlifided
$planet->getName();
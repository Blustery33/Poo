<?php

require_once 'Bicycle.php';
require_once  'Skate.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bike = new Bicycle('blue', 1);
$bike->setCurrentSpeed(10);

$car = new Car('blue','2','Electric');

var_dump($bike->switchOn());

<?php
require_once 'car.php';
require_once 'boat.php';
require_once 'motor.php';
require_once 'building.php';

$myCar = new Car("Mobil Sport ");
$myBoat = new Boat("Perahu motor" );
$myMotor = new Motor("Motor Gravel ");
$myBuilding = new Building("Gedung Tinggi ");

$myCar->showInfo();
$myCar->move();
$myCar->refuel();

echo " ";

$myBoat->showInfo();
$myBoat->move();
$myBoat->refuel();

echo " ";

$myMotor->showInfo();
$myMotor->move();
$myMotor->refuel();

echo " ";

$myBuilding->showInfo();

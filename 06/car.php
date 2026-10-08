<?php

require_once 'vehicle.php';
require_once 'fuelable.php';
require_once 'movable.php';
class Car extends Vehicle implements Fuelable, Movable
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function move()
    {
        echo $this->name . " bergerak dijalan." . "\n";
    }

    public function refuel()
    {
        echo $this->name . " isi bahan bakar mobil." . "\n";
    }
}
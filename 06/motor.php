<?php
require_once 'vehicle.php';
require_once 'fuelable.php';
require_once 'movable.php';
class Motor extends Vehicle implements Fuelable, Movable
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function move()
    {
        echo $this->name . " bergerak di tanah gravel." . "\n";
    }

    public function refuel()
    {
        echo $this->name . " mengisi bahan bakar." . "\n";
    }
}
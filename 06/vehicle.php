<?php

abstract class vehicle{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function showInfo(){
        echo "Kendaraan : " . $this->name . "\n";
    }
}
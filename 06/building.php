<?php
require_once 'vehicle.php';

class building extends vehicle {
    public function __construct($name){
        parent::__construct($name);
    }
}
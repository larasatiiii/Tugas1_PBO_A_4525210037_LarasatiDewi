<?php
require_once 'bangundatar.php';
class lingkaran extends bangundatar{
    private $r;

    public function __construct($r){
        $this->r = $r;

    }

    public function luas(){
        return M_PI * $this->r * $this->r;
    }

    public function keliling(){
        return 2 * M_PI * $this->r;
    }
}
<?php
require_once 'bangundatar.php';
class segitiga extends bangundatar{
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function luas(){
        return ($this->alas * $this->tinggi) * 2;
    }
}
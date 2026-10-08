<?php
require_once 'handphone.php';
class featurephone extends handphone{

    private $merk;
    private $model;
    private $nomor;

    public function __construct($merk, $model){
        parent::__construct($merk, $model);
    }

    public function nyalakan(){
        echo "Feature phone : " . $this->merk . " " .  $this->model . "dinyalakan." . "\n";
    }

    public function matikan(){
        echo "Feature phone : " . $this->merk . " " .  $this->model . "dimatikan." . "\n";
    }

    public function telepon($nomor){
        echo "Melakukan panggilan suara ke nomor" . $this->nomor . "\n";
    }

    public function mainGameSnake(){
        echo "Memainkan Game Snake" . "\n";
    }

}
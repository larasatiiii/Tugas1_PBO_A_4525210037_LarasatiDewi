<?php
require_once 'handphone.php';
class smartphone extends handphone{

    private $merk;
    private $model;
    private $nomor;

    public function __construct($merk, $model){
        parent::__construct($merk, $model);
    }

    public function nyalakan(){
        echo "Feature phone : " . $this->merk . " " .  $this->model . "sedang booting." . "\n";
    }

    public function matikan(){
        echo "Feature phone : " . $this->merk . " " .  $this->model . "sedang shutdown." . "\n";
    }

    public function telepon($nomor){
        echo "Melakukan panggilan suara ke nomor" . $this->nomor . "\n";
    }

    public function aksesInternet(){
        echo "Mengakses Internet melalui smartphone" . "\n";
    }

}
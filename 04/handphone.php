<?php

class handphone{
    private $merk;
    private $model;

    public function __construct($merk, $model){
        $this->merk = $merk;
        $this->model = $model;
    }

    public function nyalakan(){
        echo "Hnadphone Dinyalakan" . "\n";
    }

    public function matikan(){
        echo "Hnadphone dimatikan" . "\n";
    }

    public function telepon($nomor){
        echo "Memanggil nomor" . $nomor . "\n";
    }
}
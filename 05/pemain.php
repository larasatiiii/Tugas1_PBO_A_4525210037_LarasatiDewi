<?php

class pemain {
    private $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }
}
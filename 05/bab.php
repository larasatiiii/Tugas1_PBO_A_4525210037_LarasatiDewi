<?php

class bab {
    private $judulBab;

    public function __construct($judulBab){
        $this->judulBab = $judulBab;
    }

    public function getJudulBab(){
        return $this->judulBab;
    }
}
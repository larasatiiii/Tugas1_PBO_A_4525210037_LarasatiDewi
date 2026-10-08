<?php

class dokter{
    private $nama;
    public function __construct($nama){
        $this->nama = $nama;
    }

    public function merawat($pasien)
    {
        echo "Dokter " . $this->nama . " merawat pasien " . $pasien->getNama();
    }
}
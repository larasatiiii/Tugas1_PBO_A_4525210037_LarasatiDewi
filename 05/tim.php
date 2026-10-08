<?php

class Tim
{
    private $namaTim;
    private $daftarPemain;

    public function __construct($namaTim, $daftarPemain)
    {
        $this->namaTim = $namaTim;
        $this->daftarPemain = $daftarPemain;
    }

    public function tampilkanPemain()
    {
        echo "Tim " . $this->namaTim . " memiliki pemain: \n";

        foreach ($this->daftarPemain as $pemain) {
            echo "- " . $pemain->getNama() . "\n";
        }
    }
}
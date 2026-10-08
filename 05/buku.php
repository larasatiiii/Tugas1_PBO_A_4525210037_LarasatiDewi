<?php

class Buku
{
    private $judulBuku;
    private $daftarBab;

    public function __construct($judulBuku)
    {
        $this->judulBuku = $judulBuku;
        $this->daftarBab = [];
        $this->tambahBab();
    }

    private function tambahBab()
    {
        $this->daftarBab[] = new Bab("Pendahuluan");
        $this->daftarBab[] = new Bab("Isi");
        $this->daftarBab[] = new Bab("Penutup");
    }

    public function tampilkanBab()
    {
        echo "Buku " . $this->judulBuku . " memiliki bab: \n";

        foreach ($this->daftarBab as $bab) {
            echo "- " . $bab->getJudulBab() . "\n";
        }
    }
}
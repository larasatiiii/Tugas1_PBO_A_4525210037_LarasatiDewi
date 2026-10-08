<?php
require_once 'mahasiswa.php';
class MahasiswaInternational extends Mahasiswa
{
    private $negaraAsal;

    public function __construct(
        $nama = "Belum Diisi",
        $nim = "Belum Diisi",
        $umur = 0,
        $negaraAsal = "Belum Diisi"
    ) {
        parent::__construct($nama, $nim, $umur);

        $this->negaraAsal = $negaraAsal;
    }

    public function getNegaraAsal()
    {
        return $this->negaraAsal;
    }

    public function setNegaraAsal($negaraAsal)
    {
        $this->negaraAsal = $negaraAsal;
    }

    public function tampilkanInfo()
    {
        parent::tampilkanInfo();

        echo "Negara Asal: " . $this->negaraAsal . "\n";
    }
}
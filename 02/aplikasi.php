<?php

require_once 'mahasiswa.php';

$soja = new mahasiswa();
$soja->tampilkanInfo();

$soja->setNama("Soja Purnamasari");
echo "Nama  : " . $soja->getNama();

$soja->setNim("4523210104");
echo "NIM  : " . $soja->getNim();

$soja->setUmur(15);
echo "Umur  : " . $soja->getUmur();

$menden =  new mahasiswa("Nenden Nuraini", "4523210144", 17);
$menden->tampilkanInfo();
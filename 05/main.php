<?php

require_once 'Dokter.php';
require_once 'Pasien.php';
require_once 'Pemain.php';
require_once 'Tim.php';
require_once 'Bab.php';
require_once 'Buku.php';


$dokter = new Dokter("Dr. Andi");

$pasien = new Pasien("Budi");

$dokter->merawat($pasien);

echo "\n";

$pemain1 = new Pemain("Eko");

$pemain2 = new Pemain("Dina");

$tim = new Tim("Garuda", [$pemain1, $pemain2]);

$tim->tampilkanPemain();

echo "\n";

$buku = new Buku("Belajar Java");

$buku->tampilkanBab();

$buku = null;
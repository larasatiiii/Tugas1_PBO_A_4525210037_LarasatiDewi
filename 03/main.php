<?php
require_once 'MahasiswaInternational.php';
$mhsInt1 =  new mahasiswainternational();
$mhsInt1->setNama("Paolo Dicanio");
$mhsInt1->setNim("INT12345");
$mhsInt1->setUmur(21);
$mhsInt1->setNegaraAsal("Italy");
$mhsInt1->tampilkanInfo();

echo "";

$mhsInt2 = new MahasiswaInternational("Sarah", "INT67890", "Australia");
$mhsInt2->setUmur(22); 
$mhsInt2->tampilkanInfo();

echo "";

   
$mhsInt3 = new MahasiswaInternational("David", "INT54321", 23, "UK");
$mhsInt3->tampilkanInfo();

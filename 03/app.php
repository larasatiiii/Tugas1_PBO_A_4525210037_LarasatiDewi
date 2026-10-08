<?php
require_once 'bangundatar.php';
require_once 'lingkaran.php';
require_once 'persegi.php';
require_once 'segitiga.php';
$bd = new bangundatar();

$bd->luas();
$bd->keliling();

$lk = new lingkaran(15);
echo "Luas Lingkaran : " . $lk->luas() . "\n";
echo "Keliling Lingkaran : " . $lk->keliling() . "\n";

echo "\n";

$pj = new persegi(10);
echo "Luas bujur sangkar : " . $pj->luas() . "\n";
echo "Keliling bujur sangkar : " . $pj->keliling() . "\n";

echo "\n";

$sg = new segitiga(10, 8);
echo "Luas Segitiga : " . $sg->luas() . "\n";
echo $sg->keliling();
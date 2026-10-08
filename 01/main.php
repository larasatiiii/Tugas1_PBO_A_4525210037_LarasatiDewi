<?php

require_once 'iphone.php';

$iphone13 = new Iphone("Red", "128GB");
$iphone14 = new Iphone("Grey", "256GB");

echo "Spesifikasi Iphone 13\n";
echo "Warna: " . $iphone13->getColor() . "\n";
echo "Storage: " . $iphone13->getStorage() . "\n";

echo "\n";

echo "Spesifikasi Iphone 14\n";
echo "Warna: " . $iphone14->getColor() . "\n";
echo "Storage: " . $iphone14->getStorage() . "\n";
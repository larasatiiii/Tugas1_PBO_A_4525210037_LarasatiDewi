<?php
require_once 'smartphone.php';
require_once 'featurephone.php';
$daftarHandphone = array_fill(0, 2, null);

$daftarHandphone[0] = new smartphone("Samsung", "Galaxy S21");
$daftarHandphone[1] = new featurephone("Nokia", "3310");

foreach ($daftarHandphone as $hp) {
    $hp->nyalakan();
    $hp->telepon("08123456789");
    $hp->matikan();

    echo "\n";
}

// Mengakses metode khusus dengan pengecekan tipe object
foreach ($daftarHandphone as $hp) {
    if ($hp instanceof Smartphone) {
        $hp->aksesInternet();
    } elseif ($hp instanceof FeaturePhone) {
        $hp->mainGameSnake();
    }
}

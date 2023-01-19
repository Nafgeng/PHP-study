<?php
$counter = 1;
//di hitung dlu baru dicek
do {
    echo "Ini adalah do while ke-$counter" . PHP_EOL;
    $counter++;
} while ($counter <= 10);

//dicek dlu baru dihitung
$counter = 100;
do {
    echo "Ini adalah do while ke-$counter" . PHP_EOL;
    $counter++;
} while ($counter <= 10);
?>
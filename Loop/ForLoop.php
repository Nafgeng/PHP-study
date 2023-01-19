<?php
//Perulangan dengan KONDISI
$counter = 1;
for (; $counter <= 10;) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++;
}

//Perulangan dengan INITSTATEMENT
for ($counter = 1; $counter <= 10;) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++;
}

//Perulangan dengan POSTSTATEMENT
for ($counter = 1; $counter <= 10; $counter++) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}

//ALTERNATIF SYNTAX
//dari 1 ke 5
for ($counter = 1; $counter <= 5; $counter++):
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
endfor;
//dari 5 ke 1
for ($counter = 5; $counter >= 1; $counter--):
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
endfor;

?>
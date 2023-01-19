<?php
$names = ["Nafi", "Ageng", "Dhiandra"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

//pake for each cetak tanpa index / tanpa nomor
foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

//pake for each cetak dengan index
foreach ($names as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}

//for each array assosiatif
$person = [
    "first_name" => "Nafi",
    "middle_name" => "Ageng",
    "last_name" => "Dhiandra"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

?>
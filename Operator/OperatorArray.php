<?php
echo "Operator Array";
echo "\n";

$first = [
    "first_name" => "Nafi"
];

$last = [
    "first_name" => "Ageng",
    "last_name" => "Dhiadra"
];

$full = $first + $last;
var_dump($full);

//contoh 2
$a = [
    "first_name" => "Ageng",
    "last_name" => "Dhiadra"
];

$b = [
    "last_name" => "Dhiadra",
    "first_name" => "Ageng"
];

var_dump($a == $b);
var_dump($a === $b);
?>
<?php
function sum(int $first, int $second): int
{
    $total = $first + $second;
    return $total;
}
$result = sum(10, 10);
var_dump($result);
// klo dipanggil langsung g bakal jalan


$result = sum(100, 100);
var_dump($result);
// function dengan return value harus dengan variable
?>
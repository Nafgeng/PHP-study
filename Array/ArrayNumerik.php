<?php
$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["IDN", "Boarding", "School"];
var_dump($names);

//Menampilkan data array index
var_dump($names[0]);

//Mengubah data array
$names[0] = "SMK IDN";
var_dump($names);

//Menghapus data array
unset($names[1]);
var_dump($names);

//Menambahkan data array
$names[] = "Bogor";
var_dump($names);


?>
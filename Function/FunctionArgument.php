<?php

//Function Argument
function sayHello($name){
    // Parameter wajib diisi klo tdk bisa eror
    echo "Hello $name" . PHP_EOL;
}

sayHello("Nap");
sayHello("geng");

//Function Argument lebih dari 1
function sayHello2($firstName, $secondName){
    echo "Hello $firstName $secondName" . PHP_EOL;
}

sayHello2("Napi","Ageng");
sayHello2("Ageng","Dhiandra");
?>
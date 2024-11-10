<?php 
//Variable Scope / Lingkup Variable
$x = 10;

function tampilkan(){
    $x = 20;
    echo $x;
}

tampilkan();

function tampil($a){
    return "Nilaimu $a";
}
echo "<br>";
echo tampil(10);

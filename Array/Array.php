<?php 
//array
//variable yang menyimpan banyak nilai
//Elemen dalam array boleh memilki tipe data yang berbeda.
//Pasangan Key -> value
//Key nya index, yg dimulai dari 0

//Membuat array
//Cara lama
$day=array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");

//Cara Baru
$mouth=["Januari","Februari","Maret","April","Mei"];

$arr1=[1,"Satu",True];

//Cara menampilkan Array
var_dump($day);
echo "<br>";
print_r($mouth);
echo "<br>";

//Menampilkan 1 elemen pada array
echo $mouth[2];
echo "<br>";

//Menambahkan elemen baru pada array
$mouth[]="Juni";
var_dump( $mouth);
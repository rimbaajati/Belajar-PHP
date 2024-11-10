<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpdasar";

//Membuat Koneksi
$conn = new mysqli($host, $username, $password, $dbname);

//Mengecek Koneksi
if ($conn->connect_error) {
    die("". $conn->connect_error);
}
?>
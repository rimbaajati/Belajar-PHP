<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "phpcrud";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Koneksi Gagal". $conn->connect_error);
    }
    ?>
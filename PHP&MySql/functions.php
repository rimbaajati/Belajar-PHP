<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "phpdasar";

    $conn = new mysqli($hostname, $username, $password, $database);
    if ($conn->connect_error) {
        die("". $conn->connect_error);
    }

    function read($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
}

    function insert($data){
        global $conn;
        //Ambil data disetiap form
        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $email = htmlspecialchars($data["email"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "INSERT INTO mahasiswa (nama,nim,jurusan,email,gambar)
                    VALUES 
                    ('$nama','$nim','$jurusan','$email','$gambar')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function delete($id){
        global $conn;
        $id = mysqli_real_escape_string($conn, $id);

        $query = "DELETE FROM mahasiswa WHERE id = $id";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

function update($data)
{
    global $conn;

    // Ambil data
    $id = $data["id"];  // Pastikan ID diambil dari form
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // Query update untuk memperbarui data mahasiswa berdasarkan ID
    $query = "UPDATE mahasiswa SET 
        nama = '$nama',
        nim = '$nim',
        jurusan = '$jurusan',
        email = '$email',
        gambar = '$gambar'
        WHERE id = $id";  // Tambahkan WHERE id = $id untuk memilih baris yang tepat

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);  // Mengembalikan jumlah baris yang terpengaruh
}
?>
<?php
    //Koneksi Database
    include "functions.php";

    //Cek apakah submit sudah diklik
    if( isset($_POST["submit"])){
        //Ambil data disetiap form
        
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <style>
        /* Resetting default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7fc;
            color: #333;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
            font-size: 28px;
        }

        form {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Responsif */
        @media (max-width: 768px) {
            form {
                width: 90%;
                padding: 15px;
            }

            input[type="text"],
            button {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST">

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" placeholder="Masukkan nama lengkap">

        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim" placeholder="Masukkan NIM">

        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" placeholder="Masukkan jurusan">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Masukkan email">

        <label for="gambar">Foto</label>
        <input type="text" name="gambar" id="gambar">

        <button type="submit">Kirim</button>
    </form>
</body>

</html>

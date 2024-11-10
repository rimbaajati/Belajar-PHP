<?php
require "functions.php";

$mahasiswa = query("SELECT * FROM mahasiswa");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        /* Resetting some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7fc;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background-color: #007bff;
            color: white;
            margin: 0;
            font-size: 24px;
        }

        /* Styling untuk tombol tambah data */
        button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin: 20px auto;
            display: block;
        }

        button:hover {
            background-color: #218838;
        }

        table {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        td img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 50%;
        }

        a {
            color: #007bff;
            text-decoration: none;
            margin: 0 10px;
        }

        a:hover {
            text-decoration: underline;
        }

        .aksi a {
            margin: 0 5px;
            padding: 5px 10px;
            border: 1px solid #007bff;
            border-radius: 5px;
            background-color: #e7f3ff;
            transition: background-color 0.3s, color 0.3s;
        }

        .aksi a:hover {
            background-color: #007bff;
            color: white;
        }

        /* Responsif */
        @media (max-width: 768px) {
            table {
                width: 100%;
                font-size: 14px;
            }

            th,
            td {
                padding: 8px;
            }

            button {
                font-size: 14px;
                padding: 8px 16px;
            }
        }

        /* Styling untuk aksi edit dan hapus */
        .aksi {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    
    <a href="tambah.php"><button>Tambah Data Mahasiswa</button></a>

    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $mhs): ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><img src="../img/1.jpg" alt="Foto Mahasiswa"></td>
                        <td><?= $mhs["nama"]; ?></td>
                        <td><?= $mhs["nim"]; ?></td>
                        <td><?= $mhs["jurusan"]; ?></td>
                        <td><?= $mhs["email"]; ?></td>
                        <td class="aksi">
                            <a href="#">Edit</a>
                            <a href="#">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

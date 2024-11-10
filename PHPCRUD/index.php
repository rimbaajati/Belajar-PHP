<?php
// Memanggil file Koneksi
include 'koneksi.php';

// Query untuk mengambil data
$sql = 'SELECT * FROM mahasiswa';
$result = $conn->query($sql);

// Mengambil data dari hasil query
$mahasiswa = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $mahasiswa[] = $row;
    }
} else {
    echo 'Tidak ada data mahasiswa';
}

// Pastikan untuk menutup koneksi jika sudah selesai
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* General Page Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            padding: 20px 0;
            background-color: #007bff;
            color: white;
        }

        /* Table Styles */
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        /* Action Links */
        a {
            color: #007bff;
            text-decoration: none;
            padding: 5px 10px;
            margin: 0 5px;
            border-radius: 5px;
        }

        a:hover {
            background-color: #007bff;
            color: white;
        }

        /* Pagination or extra space (if needed) */
        .action-links {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
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
                <td><?php echo $i; ?></td>
                <td><?php echo $mhs["nama"]; ?></td>
                <td><?php echo $mhs["nim"]; ?></td>
                <td><?php echo $mhs["jurusan"]; ?></td>
                <td><?php echo $mhs["email"]; ?></td>
                <td>
                    <a href="edit.php">Edit</a>
                    <a href="hapus.php">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
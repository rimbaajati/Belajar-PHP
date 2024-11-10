//Dicegat kalau data kosong
<?php
    //Cek apakah tidak ada di $_GET
    if (!isset($_GET["nama"]) || 
    !isset($_GET["nim"]) || 
    !isset($_GET["email"]) || 
    !isset($_GET["jurusan"])) {

        //redirect
        header("Location: 4-GET.php");
        exit;
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f4f7fa;
        }

        .profile-card {
            width: 300px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            padding: 40px;
        }

        .profile-card img {
            width: 100%;
            height: auto;
        }

        .profile-details {
            padding: 20px;
        }

        .profile-details h1 {
            font-size: 1.5em;
            margin: 10px 0;
            color: #333;
        }

        .profile-details p {
            margin: 5px 0;
            color: #555;
        }

        .profile-details p span {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body>

    <div class="profile-card">
        <!-- Ganti "foto.jpg" dengan path foto mahasiswa yang sesuai -->
        <img src="foto.jpg" alt="Foto Mahasiswa">
        <div class="profile-details">
            <h1><?= $_GET["nama"];?></h1>
            <p><span>NIM:</span> <?= $_GET["nim"];?> </p>
            <p><span>Email:</span> <?= $_GET["email"]; ?> </p>
            <p><span>Jurusan:</span> <?= $_GET["jurusan"]; ?> </p>
        </div>
        <a href="4-GET.php"><button>Kembali Ke Daftar</button></a>
    </div>

</body>

</html>
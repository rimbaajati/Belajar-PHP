<?php 

    include "db.php";

    if (isset($_POST["submit"])){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nama = htmlspecialchars($_POST["nama"]);
            $nim = htmlspecialchars($_POST["nim"]);
            $jurusan = $_POST["jurusan"];
            $email = htmlspecialchars($_POST["email"]);
            $gambar = htmlspecialchars($_POST["gambar"]);
        }

        $sql = "INSERT INTO mahasiswa (nama,nim,jurusan,email,gambar) VALUES
        ('$nama', '$nim', '$jurusan', '$email', '$gambar')";

        if($conn->query($sql) === TRUE){
            echo "<script>
            alert('Data berhasil ditambahkan');
            </script>";
        }else{
            echo "<script>
            alert('Data GAGAL ditambahkan');
            </script>";
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create</title>
        <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        /* Menambahkan style untuk body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        /* Membuat container form lebih menarik */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin-top: 20px;
        }

        /* Judul form */
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        /* Style label */
        label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
            color: #555;
        }

        /* Style input teks */
        input[type="text"], input[type="email"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Style input dengan focus */
        input[type="text"]:focus, input[type="email"]:focus, select:focus {
            border-color: #66afe9;
            outline: none;
        }

        /* Style untuk tombol kirim */
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        /* Hover effect pada tombol kirim */
        button[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Menambahkan space pada option dalam select */
        select {
            padding: 10px;
        }

        /* Style untuk input gambar */
        input[type="text"] {
            margin-bottom: 15px;
        }

        /* Responsivitas untuk perangkat mobile */
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }

            form {
                width: 100%;
                margin-top: 10px;
            }

            h1 {
                font-size: 20px;
            }
        }
        </style>
    </head>
    <body>
        <h1>Tambah Data Mahasiswa</h1>
        <form method="POST">

            <input type="hidden" type="text" name="id">

            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required>

            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nama"required>

            <label for="jurusan">Jurusan</label>
            <select name="jurusan" name="jurusan" required>
                <option value="">Pilih Jurusan</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Manajemen">Manajemen</option>
                <option value="Psikologi">Psikologi</option>
                <option value="Ekonomi">Ekonomi</option>
                <option value="Ilmu Komputer">Ilmu Komputer</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
                <option value="Arsitektur">Arsitektur</option>
                <option value="Biologi">Biologi</option>
                <option value="Kimia">Kimia</option>
                <option value="Fisika">Fisika</option>
                <option value="Hukum">Hukum</option>
                <option value="Ilmu Pemerintahan">Ilmu Pemerintahan</option>
                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                <option value="Akuntansi">Akuntansi</option>
                <option value="Agribisnis">Agribisnis</option>
                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
                <option value="Pendidikan Anak Usia Dini">Pendidikan Anak Usia Dini</option>
                <option value="Sastra Indonesia">Sastra Indonesia</option>
                <option value="Sastra Inggris">Sastra Inggris</option>
                <option value="Bimbingan dan Konseling">Bimbingan dan Konseling</option>
                <option value="Teknologi Pangan">Teknologi Pangan</option>
                <option value="Teknik Kimia">Teknik Kimia</option>
                <option value="Matematika">Matematika</option>
                <option value="Geografi">Geografi</option>
                <option value="Sosiologi">Sosiologi</option>
                <option value="Psikologi Pendidikan">Psikologi Pendidikan</option>
                <option value="Farmasi">Farmasi</option>
                <option value="Perhotelan">Perhotelan</option>
                <option value="Pariwisata">Pariwisata</option>
                <option value="Ilmu Gizi">Ilmu Gizi</option>
                <option value="Keperawatan">Keperawatan</option>
                <option value="Fisioterapi">Fisioterapi</option>
                <option value="Berkebun dan Hortikultura">Berkebun dan Hortikultura</option>
                <option value="Manajemen Informatika">Manajemen Informatika</option>
                <option value="Pendidikan Kesehatan">Pendidikan Kesehatan</option>
                <option value="Ilmu Hukum">Ilmu Hukum</option>
                <option value="Perdagangan">Perdagangan</option>
                <option value="Manajemen Bisnis">Manajemen Bisnis</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Seni Rupa">Seni Rupa</option>
                <option value="Desain Interior">Desain Interior</option>
                <option value="Desain Grafis">Desain Grafis</option>
                <option value="Kedokteran">Kedokteran</option>
                <option value="Kedokteran Gigi">Kedokteran Gigi</option>
                <option value="Sistem Keamanan Jaringan">Sistem Keamanan Jaringan</option>
                <option value="Ilmu Lingkungan">Ilmu Lingkungan</option>
                <option value="Teknologi Informasi">Teknologi Informasi</option>
                <option value="Edukasi Bahasa Indonesia">Edukasi Bahasa Indonesia</option>
                <option value="Pendidikan Fisika">Pendidikan Fisika</option>
                <option value="Pendidikan Kimia">Pendidikan Kimia</option>
                <option value="Pendidikan Biologi">Pendidikan Biologi</option>
                <option value="Pendidikan Sejarah">Pendidikan Sejarah</option>
                <option value="Statistika">Statistika</option>
                <option value="Matematika Terapan">Matematika Terapan</option>
            </select>

            <label for="email">Email</label>
            <input type="email" name="email" id="email">

            <label for="gambar">Foto</label>
            <input type="text" name="gambar" id="gambar" required>

            <button type="submit" name="submit">Kirim</button>
        </form>
    </body>
    </html>
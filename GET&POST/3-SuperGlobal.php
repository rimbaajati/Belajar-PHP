<?php
$mahasiswa = [
    ["nama" => "Audysa Rimba Jati", "nim" => "102207006", "email" => "audysarj@gmail.com", "jurusan" => "Informatika"],
    ["nama" => "Galih", "nim" => "102207006", "email" => "galihrtn@gmail.com", "jurusan" => "Sastra Inggris"],
    ["nama" => "Michael", "nim" => "102207006", "email" => "michael@gmail.com", "jurusan" => "Fisika Murni"],
    ["nama" => "Kahitna", "nim" => "102207006", "email" => "khtnaxv@gmail.com", "jurusan" => "Informatika", "tugas" => [90, 80, 88]],
    ["nama" => "Aldi Pratama", "nim" => "102207007", "email" => "aldi.pratama@gmail.com", "jurusan" => "Teknik Mesin"],
    ["nama" => "Budi Santoso", "nim" => "102207008", "email" => "budi.santoso@gmail.com", "jurusan" => "Ekonomi"],
    ["nama" => "Cici Lestari", "nim" => "102207009", "email" => "cici.lestari@gmail.com", "jurusan" => "Psikologi"],
    ["nama" => "Diana", "nim" => "102207010", "email" => "diana@gmail.com", "jurusan" => "Desain Grafis"],
    ["nama" => "Eko Prabowo", "nim" => "102207011", "email" => "eko.prabowo@gmail.com", "jurusan" => "Sistem Informasi"],
    ["nama" => "Fariq Ali", "nim" => "102207012", "email" => "fariq.ali@gmail.com", "jurusan" => "Matematika"],
    ["nama" => "Gita Maheswari", "nim" => "102207013", "email" => "gita.maheswari@gmail.com", "jurusan" => "Kimia"],
    ["nama" => "Hendra Setiawan", "nim" => "102207014", "email" => "hendra.setiawan@gmail.com", "jurusan" => "Biologi"],
    ["nama" => "Indra Kusuma", "nim" => "102207015", "email" => "indra.kusuma@gmail.com", "jurusan" => "Arsitektur"],
    ["nama" => "Joko Widodo", "nim" => "102207016", "email" => "joko.widodo@gmail.com", "jurusan" => "Teknik Informatika"],
    ["nama" => "Karla Anggraeni", "nim" => "102207017", "email" => "karla.anggraeni@gmail.com", "jurusan" => "Akuntansi"],
    ["nama" => "Lia Marlina", "nim" => "102207018", "email" => "lia.marlina@gmail.com", "jurusan" => "Sastra Indonesia"],
    ["nama" => "Maya Sari", "nim" => "102207019", "email" => "maya.sari@gmail.com", "jurusan" => "Manajemen"],
    ["nama" => "Nina Sofia", "nim" => "102207020", "email" => "nina.sofia@gmail.com", "jurusan" => "Hukum"],
    ["nama" => "Oscar William", "nim" => "102207021", "email" => "oscar.william@gmail.com", "jurusan" => "Ilmu Komunikasi"],
    ["nama" => "Putri Amalia", "nim" => "102207022", "email" => "putri.amalia@gmail.com", "jurusan" => "Desain Komunikasi Visual"],
    ["nama" => "Qori Nabila", "nim" => "102207023", "email" => "qori.nabila@gmail.com", "jurusan" => "Teknik Elektro"],
    ["nama" => "Rina Sari", "nim" => "102207024", "email" => "rina.sari@gmail.com", "jurusan" => "Filsafat"],
    ["nama" => "Sari Anggraini", "nim" => "102207025", "email" => "sari.anggraini@gmail.com", "jurusan" => "Ilmu Politik"],
    ["nama" => "Tina Permata", "nim" => "102207026", "email" => "tina.permata@gmail.com", "jurusan" => "Kedokteran"],
    ["nama" => "Umar Farouk", "nim" => "102207027", "email" => "umar.farouk@gmail.com", "jurusan" => "Geologi"],
    ["nama" => "Vira Maya", "nim" => "102207028", "email" => "vira.maya@gmail.com", "jurusan" => "Statistika"],
    ["nama" => "Wati Sunarti", "nim" => "102207029", "email" => "wati.sunarti@gmail.com", "jurusan" => "Pendidikan Guru"],
    ["nama" => "Xena Utami", "nim" => "102207030", "email" => "xena.utami@gmail.com", "jurusan" => "Sastra Arab"],
    ["nama" => "Yusuf Fadli", "nim" => "102207031", "email" => "yusuf.fadli@gmail.com", "jurusan" => "Ekonomi Pembangunan"],
    ["nama" => "Zahra Rahma", "nim" => "102207032", "email" => "zahra.rahma@gmail.com", "jurusan" => "Filsafat"],
    ["nama" => "Ardianto Rudi", "nim" => "102207033", "email" => "ardianto.rudi@gmail.com", "jurusan" => "Arkeologi"],
    ["nama" => "Bima Adi", "nim" => "102207034", "email" => "bima.adi@gmail.com", "jurusan" => "Geografi"],
    ["nama" => "Candra Pramudya", "nim" => "102207035", "email" => "candra.pramudya@gmail.com", "jurusan" => "Ilmu Lingkungan"],
    ["nama" => "Dewi Lestari", "nim" => "102207036", "email" => "dewi.lestari@gmail.com", "jurusan" => "Sosiologi"],
    ["nama" => "Eko Sigit", "nim" => "102207037", "email" => "eko.sigit@gmail.com", "jurusan" => "Teknik Industri"],
    ["nama" => "Fanny Amelia", "nim" => "102207038", "email" => "fanny.amelia@gmail.com", "jurusan" => "Desain Interior"]
]; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobal Variable</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        table th,
        table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #007BFF;
            color: white;
        }

        table td {
            background-color: #f9f9f9;
        }

        table tr:nth-child(even) td {
            background-color: #f1f1f1;
        }

        table tr:hover td {
            background-color: #d7e3fc;
        }
    </style>
</head>

<body>
    <h1>Data Mahasiswa</h1>

    <table>
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
        </thead>
        <tbody>
            <?php $index = 1; ?>
            <?php foreach ($mahasiswa as $mhs): ?>
                <tr>
                    <td><?php echo $index; ?></td>
                    <td><?php echo $mhs["nama"]; ?></td>
                    <td><?php echo $mhs["nim"]; ?></td>
                    <td><?php echo $mhs["email"]; ?></td>
                    <td><?php echo $mhs["jurusan"]; ?></td>
                </tr>
                <?php $index++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
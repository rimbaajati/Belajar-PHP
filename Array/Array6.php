<?php 
//Array Associative
//Key nya adalah string yg kita buat sendiri

$mahasiswa=[
    ["nama"=>"Audysa Rimba Jati", "nim" => "102207006","email"=>"audysarj@gmail.com","jurusan"=>"Informatika"],
    ["nama" => "Galih", "nim" => "102207006", "email" => "galihrtn@gmail.com", "jurusan" => "Sastra Inggris"],
    ["nama" => "Michael", "nim" => "102207006", "email" => "michael@gmail.com", "jurusan" => "Fisika Murni"],
    ["nama" => "Kahitna", "nim" => "102207006", "email" => "khtnaxv@gmail.com", "jurusan" => "Informatika" , "tugas"=> [90,80,88] ]
]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <li>Nama : <?php echo $mhs["nama"];?></li>
            <li>NIM : <?php echo $mhs["nim"];?></li>
            <li>Email : <?php echo $mhs["email"];?></li>
            <li>Jurusan : <?php echo $mhs["jurusan"];?></li>
        </ul>
    <?php endforeach;?>    
</body>
</html>


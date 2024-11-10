<?php 
$mahasiswa=[
    ["Audysa Rimba Jati","1202207006","audysarj@gmail.com","Teknik Informatika"],
    ["Aisyarila","1202208009","aisyarla@gmail.com","Teknik Mesin"],
    ["Garinda Bimo","10202203001","grindbm@gmail.com","Teknik Dirgantara"],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <li><?php echo $mahasiswa[0][0];?></li>
        <li><?php echo $mahasiswa[0][1]; ?></li>
        <li><?php echo $mahasiswa[0][2]; ?></li>
        <li><?php echo $mahasiswa[0][3]; ?></li>
    </ul>
    <ul>
        <li><?php echo $mahasiswa[1][0]; ?></li>
        <li><?php echo $mahasiswa[1][1]; ?></li>
        <li><?php echo $mahasiswa[1][2]; ?></li>
        <li><?php echo $mahasiswa[1][3]; ?></li>
    </ul>
    <br>
    <br>

    <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <li><?php echo $mhs[0];?></li>
            <li><?php echo $mhs[1]; ?></li>
            <li><?php echo $mhs[2]; ?></li>
            <li><?php echo $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>
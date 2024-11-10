<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        body{
            margin: 0;
            padding:0;
            max-width: 100vh;

            display: flex;
            gap:20px;
        }
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            display: flex;
            align-items: center;
            justify-content:center;
            transition: 2s;
            
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <?php
    $angka = [33, 42, 1, 9, 6, 54, 25, 66];
    ?>
    <?php foreach($angka as $a){?>
        <div class="kotak"><?php echo $a?></div>
    <?php }?>
</body>
</html>
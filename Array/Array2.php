<?php 
//Melakukan perulangan pada array
// for / foreach

$num = [2,3,4,5,6,7,8];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        body{
            display: flex;
            flex-direction: row;
            gap:20px
        }
        div{
            width: 200px;
            height: 200px;
            background-color: steelblue;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin:100px auto;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < 7; $i++) { ?>
        <div><?php echo $num[$i]; ?></div>
    <?php } ?>
</body>

</html>
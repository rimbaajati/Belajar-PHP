<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $angka=[[1,2,3],[4,5,6],[7,8,9]];
    ?>

<?php foreach ($angka as $a) { ?>
    <?php foreach ($a as $b) { ?>
        <div class="kotak"><?php echo $b; ?></div>
    <?php } ?>
<?php } ?>

</body>
</html>
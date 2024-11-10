<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP 1</title>
</head>
<body>
    <table border="2" cellpadding="10" cellspacing="5">
        <?php
            for( $i = 1; $i <= 3; $i++ ){
                echo "<tr>";
                for( $j = 1; $j <= 5; $j++ ){
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>

    <table border="2" cellpadding="10" cellspacing="2">
    <?php for ($a = 1; $a <= 5; $a++) { ?>
            <tr>
                <?php for ($b = 1; $b <= 3; $b++) { ?>
                    <td><?php echo "Baris $a, Kolom $b"; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

</body>
</html>
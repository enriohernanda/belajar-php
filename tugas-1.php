<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 PHP - Table</title>
</head>

<style>
    table {
        border-collapse: collapse;
    }

    td {
        height: 40px;
        width: 40px;
        border: 1px solid #000;
        text-align: center;
        padding: 5px;
    }

    .color-red {
        background-color: #ff0000;
        color: #fff;
    }

    .color-black {
        background-color: #000;
        color: #ff0000;
    }
</style>

<body>
    <?php
    echo "<table>";
    for ($i = 1; $i <= 5; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 5; $j++) {
            if (($i + $j) % 2 == 0) {
                echo "<td class='color-red'>$i, $j</td>";
            } else {
                echo "<td class='color-black'>$i, $j</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>
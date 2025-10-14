<?php
if (isset($_POST["kirim"])) {
    $angka = $_POST['angkaSembarang'];

    if ($angka % 2 == 0) {
        $is_true = (bool) $angka;
        echo $is_true . " " . $angka % 2 == 0;
    } else {
        $is_false = (bool) $angka;
        echo $is_false . " " . $angka % 2 == 1;
    }

    echo $angka;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="angkaSembarang">
        <button type="submit" name="kirim">Lihat Angka</button>
    </form>
</body>

</html>
<?php
if (isset($_POST["kirim"])) {
    $angka = $_POST['angkaSembarang'];

    if ($angka > 0) {
        echo rand(1, 100);
    } elseif ($angka == 0) {
        echo 0;
    } else {
        echo rand(-100, -1);
    }
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
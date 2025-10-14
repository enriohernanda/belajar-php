<?php
if (isset($_POST["kirim"])) {
    $namaDepan = $_POST['NamaDepan'];
    $namaTengah = $_POST['NamaTengah'];
    $namaBelakang = $_POST['NamaBelakang'];
    echo $namaDepan . " " . $namaTengah . " " . $namaBelakang;
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
        <input type="text" name="NamaDepan">
        <input type="text" name="NamaTengah">
        <input type="text" name="NamaBelakang">
        <button type="submit" name="kirim">Masukkan nama</button>
    </form>
</body>

</html>
<?php
$hasil = 0;
$uangSendiri = 0;
$uangDariTeman = 0;
if (isset($_POST["kirim"])) {
    $uangSendiri = $_POST['UangSendiri'];
    $uangDariTeman = $_POST['UangDariTeman'];
    $hasil = $uangSendiri + $uangDariTeman;
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
        <label for="">Uang Sendiri</label>
        <br>
        <input type="number" name="UangSendiri">
        <br>
        <label for="">Uang dari Teman</label>
        <br>
        <input type="number" name="UangDariTeman">
        <br><br>
        <button type="submit" name="kirim">Tambah</button>
        <br><br>
        <span>Hasil Perhitungan:
            <?= "Rp. " . number_format($uangSendiri, 2, ',', '.') . " + " . "Rp. " . number_format($uangDariTeman, 2, ',', '.') . " = " . "Rp. " . number_format($hasil, 2, ',', '.') ?></span>
    </form>
</body>

</html>
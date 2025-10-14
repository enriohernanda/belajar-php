<?php
if (isset($_POST["kirim"])) {
    $uangSendiri = $_POST['UangSendiri'];
    $uangDariTeman = $_POST['UangDariTeman'];
    $hasil = $uangSendiri + $uangDariTeman;
    echo $uangSendiri . " + " . $uangDariTeman . " = " . $hasil;
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
        <input type="number" name="UangSendiri">
        <input type="number" name="UangDariTeman">
        <button type="submit" name="kirim">Tambah</button>
    </form>
</body>

</html>
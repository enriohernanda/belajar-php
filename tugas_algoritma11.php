<?php
if (isset($_POST["kirim"])) {
    $angka = $_POST['angkaSembarang'];

    if ($angka % 2 == 0) {
        echo "Angka $angka adalah genap (TRUE)";
    } else {
        echo "Angka $angka adalah ganjil (FALSE)";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Angka Genap atau Ganjil</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="angkaSembarang" placeholder="Masukkan angka">
        <button type="submit" name="kirim">Lihat Angka</button>
    </form>
</body>

</html>
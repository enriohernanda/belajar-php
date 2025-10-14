<?php
if (isset($_POST["kirim"])) {
    $nilaiKilometer = $_POST['NilaiKilometer'];
    $konversi_km_ke_miles = 0.621371;
    $hasil = $nilaiKilometer * $konversi_km_ke_miles;
    echo $hasil;
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
        <input type="number" name="NilaiKilometer">
        <button type="submit" name="kirim">kirim</button>
    </form>
</body>

</html>
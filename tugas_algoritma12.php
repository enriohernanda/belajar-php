<?php
if (isset($_POST["kirim"])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $angka3 = $_POST['angka3'];

    if ($angka1 >= $angka2 && $angka1 >= $angka3) {
        $terbesar = $angka1;
    } elseif ($angka2 >= $angka1 && $angka2 >= $angka3) {
        $terbesar = $angka2;
    } else {
        $terbesar = $angka3;
    }

    echo "Angka terbesar adalah: " . $terbesar;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Angka Terbesar</title>
</head>

<body>
    <form action="" method="post">
        <label>Angka 1:</label>
        <input type="number" name="angka1" required><br><br>
        <label>Angka 2:</label>
        <input type="number" name="angka2" required><br><br>
        <label>Angka 3:</label>
        <input type="number" name="angka3" required><br><br>
        <button type="submit" name="kirim">Lihat Angka Terbesar</button>
    </form>
</body>

</html>
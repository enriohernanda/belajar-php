<?php
// cara 1
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     #code
// }


// cara 2
// isset untuk ngecek apakah data sudah diset atau belum
if (isset($_POST["kirim"])) {
    $nama = $_POST['nama'];
    echo "Nama saya adalah " . $nama;
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
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Nama</label>
        <input type="text" name="nama" placeholder="Isi Nama Anda">
        <button type="submit" name="kirim">Kirim</button>
    </form>
</body>

</html>
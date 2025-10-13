<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 8</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Nilai</label>
        <input type="text" name="nilai" placeholder="Isi Nilai">
        <button type="submit" name="kirim">Kirim</button>
    </form>
</body>

</html>


<?php
$nilai = $_POST['nilai'];

// if ($nilai >= 90 && $nilai <= 100) {
//     // nilai lebih dari 90 sampai 100
//     $grade = "A";
// } else if ($nilai >= 80 && $nilai <= 89) {
//     // nilai lebih dari 80 sampai 89
//     $grade = "B";
// } else if ($nilai >= 70 && $nilai <= 79) {
//     // nilai lebih dari 70 sampai 79
//     $grade = "C";
// } else if ($nilai >= 60 && $nilai <= 69) {
//     // nilai lebih dari 60 sampai 69
//     $grade = "D";
// } else if ($nilai >= 0 && $nilai <= 59) {
//     // nilai lebih dari 0 sampai 59
//     $grade = "E";
// } else {
//     // nilai tidak ada
//     $grade = "nilai hanya 0-100";
// }


switch ($nilai) {
    case $nilai >= 90 && $nilai <= 100:
        $grade = "A";
        break;
    case $nilai >= 80 && $nilai <= 89:
        $grade = "B";
        break;
    case $nilai >= 70 && $nilai <= 79:
        $grade = "C";
        break;
    case $nilai >= 60 && $nilai <= 69:
        $grade = "D";
        break;
    case $nilai >= 0 && $nilai <= 59:
        $grade = "E";
        break;
}

echo "<p>Nilai anda: " . $nilai . "</p>";
echo "<p>Grade anda: " . $grade . "</p>";

?>
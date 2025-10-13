<!--  >: besar <: kecil ==: membandingkan !==: tidak sama dengan ! -->

<?php
$nama = "enrio";
if ($nama === "enrio") {
    echo "Ya";
} else { //selain itu
    echo "bukan";
}

echo "<br>";

$nilai = 50;

if ($nilai >= 90) {
    $grade = "A";
} else if ($nilai >= 80) {
    $grade = "B";
} else if ($nilai >= 70) {
    $grade = "C";
} else if ($nilai >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}


if ($nilai >= 60) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

echo "Nama: " . $nama . "<br>";
echo "Nilai: " . $nilai . "<br>";
echo "Grade: " . $grade . "<br>";
echo "Lulus: " . $status . "<br>";

echo "<br><br>";

$warna = "merah";
if ($warna == "kuning") {
    echo "warna favorit kuning";
} elseif ($warna == "merah") {
    echo "warna favorit merah";
} elseif ($warna == "hijau") {
    echo "warna favorit hijau";
} else {
    echo "terserah";
}


echo "<br><br>";

switch ($warna) {
    case "merah":
        echo "Warna favorit merah";
        break;
    case "kuning":
        "Warna favorit kuning";
        break;
    case "hijau":
        echo "Warna favorit hijau";
        break;
    default:
        echo "Warna favorit terserah";
        break;
}

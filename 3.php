<?php
// array: tipe data atau struktur data yang bisa menyimpan nilai lebih dari 1

$keranjang = "Semangka, Salak, Melon"; // hanya menyimpan 1 data
$keranjang_array = ["Semangka",  "Salak",  "Melon"]; //dapat menyimpan data lebih dari 1
// $keranjang_array = array("", "");
// $keranjang_array[] = "Pisang";
// $keranjang_array[] = "Nanas";
array_push($keranjang_array, "Pisang", "Nanas", "Rambutan");

echo "Keranjang: " . $keranjang . "<br>";
print_r($keranjang_array);
echo "<br>";
echo "Saya mau buah" . $keranjang_array[1] . "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "<h1>Array Assosiative</h1>";
//elemen accessnya di akses menggunakan string atau integer yang ditetapkan
// $peserta = array();
$peserta = [
    [
        "nama" => "Enrio Hernanda",
        "umur" => 24,
        "kelas" => "Web Programming",
    ],
    [
        "nama" => "Rio",
        "umur" => 24,
        "kelas" => "Mobile Programming",
    ],
];

print_r($peserta);
echo "<br>";

foreach ($peserta as $key => $pst) {
    echo "<br>";
    echo $pst['nama'] . " ini adalah index ke " . $key;
}


echo "<br>";
echo "<br>";
echo "Nama Peserta: " . $peserta[0]['nama'] . "<br>";
echo "Umur: " . $peserta[0]['umur'] . "<br>";
echo "kelas: " . $peserta[0]['kelas'] . "<br>";

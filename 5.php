<!-- looping /perulangan : struktur kode yang digunakan untuk menjalankan blok kode selama kondisi tertentu terpenuhi -->
<!-- for, while, do while, foreach -->

<?php
// for
// for ($i = 10; $i >= 1; $i--):
//     echo $i . ". " . "Saya berjanji tidak terlambat lagi <br>";
// endfor;

// echo "<br><br>";

// while
// $a = 1;
// while ($a <= 10) {
//     echo $a . ". " . "Aku minta maaf <br>";
//     $a++;
// }

// echo "<br><br>";

// do while

// $j = 1;
// do {
//     echo $j . ". " . "Aku minta maaf <br>";
//     $j++;
// } while ($j <= 10);

// echo "<br><br>";

// break
for ($x = 1; $x <= 10; $x++) {
    if ($x == 5) {
        break; //akan keluar dari looping dan berhenti
    }
    echo $x . "<br>";
}

echo "<br><br>";

// continue
for ($x = 1; $x <= 10; $x++) {
    if ($x == 5) {
        continue; //akan keluar dari looping dan lanjut ke nomor berikutnya
    }
    echo $x . "<br>";
}


?>
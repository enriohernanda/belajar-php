<!--
PHP : Hypertext Preprocessor
PHP akan berjalan disisi server dan dinamis 
  -->

<!-- 
  variable: let, var, const di php $
  Ember : Air, Buah, Batu <== contoh variable
   -->

<?php
$nama = "Bambang"; //varchar: kumpulan angka dan huruf atau simbol lainnya @#()
$umur = 30; //integer : bisa kita jumlah
$beratBadan = 63.4; //float
$hidup = true; //boolean
$mati = false; //boolean
$kosong = null; // null itu kosong tidak ada bentuknya berbeda dengan 0
// var_dump() : mencetak tapi akan ada output tipe data
// echo : mencetak sebuah string, integer, float dll selain array
// print : mencetak sebuah string, integer, float dll selain array
// print_r : mencetak sebuah array
echo "Selamat Datang $nama <br>";
var_dump($nama);
echo "<br>";
var_dump($umur);
echo "<br>";
var_dump($beratBadan);
echo "<br>";
var_dump($hidup);
echo "<br>";
var_dump($mati);
echo "<br>";
var_dump($kosong);
echo "<br>";

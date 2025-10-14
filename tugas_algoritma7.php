<?php
$NilaiAwal = 75;
$NilaiPerbaikan = 80;
echo "Nilai Awal = " . $NilaiAwal . " & Nilai Perbaikan = " . $NilaiPerbaikan;

echo "<br><br>";

$SimpanNilai = $NilaiAwal;
$NilaiAwal = $NilaiPerbaikan;
$NilaiPerbaikan = $SimpanNilai;
echo "Nilai Awal = " . $NilaiAwal . " & Nilai Perbaikan = " . $NilaiPerbaikan;

<!-- 
 function / fungsi
 blok kode yang diberi nama, yang bisa dipanggil kapan saja untuk menjalankan tugas tertentu
 - menghindari pengulangan kode (code reuse), memecah logika menjadi bagian terkecil
 - array_push(), substr(), strlen(), strword(), ucfirst()
-->

<?php
function panggilAku($nama = "nama belom diisi nih")
{
    return "Halo aku $nama dari masa depan <br>";
}

echo panggilAku("enrio");
echo panggilAku();
echo panggilAku("hernanda");
echo panggilAku();

// function panggilAku($nama = "belom isi nama nih")
// {
//     echo "Halo aku $nama dari masa depan <br>";
// }

// panggilAku("enrio");
// panggilAku("rio");
// panggilAku("hernanda");
// panggilAku();
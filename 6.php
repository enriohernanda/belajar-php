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


// array push
$users = [
    [
        "id" => 1243,
        "name" => "Roni"
    ],
    [
        "id" => 54231,
        "name" => "Susi"
    ]
];

array_push($users, ["id" => 505, "name" => "Enrio"]);
array_push($users, ["id" => 999, "name" => "Hernanda"]);

foreach ($users as $user) {
?>
    <ul>
        <li>ID USER: <?php $user['id'] ?></li>
        <li>USERNAME: <?php echo $user['name'] ?></li>
    </ul>
<?php
    // substr() = untuk memotong kalimat dengan menggunakan length
    $string = "saya sedang belajar pemograman dasar pada Bahasa Pemograman PHP";
    $substr = substr($string, 5);
    echo $substr . "<br>";
    // strlen()
    $strlen = strlen($string);
    echo $strlen . "<br>";
    // str_word_count
    $str_word_count = str_word_count($string);
    echo $str_word_count . "<br>";
    // ucwords
    $ucwords = ucwords($string);
    echo $ucwords . "<br>";
    // ucfirst
    $ucfirst = ucfirst($string);
    echo $ucfirst . "<br>";
}
?>
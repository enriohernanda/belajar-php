<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <?php
    $nama = "Bambang";
    $umur = 30;
    $beratBadan = 50.3;

    $nama = "Enrio";
    // define();
    define("nama", "Bambang Pamungkas");
    //const
    const posisi = "Striker";
    ?>
    <h1>Selamat Datang <?php echo $nama ?></h1>
    <?php
    echo "<p>$umur</p> <p>$beratBadan</p>";
    ?>
    <p><?php echo $umur ?> adalah umur <?php echo $nama ?></p>
    <?php
    echo "Nama Pemain : " . nama . "<br>";
    echo "Posisi : " . posisi . "<br>";
    ?>
    <p>Nama Pemain : <?php echo nama ?></p>
    <p>Posisi : <?php echo posisi ?></p>
</body>

</html>
<?php
$students = [
    [
        "nim" => "2025B2K",
        "nama" => "Enrio Hernanda",
        "alamat" => "Jakarta",
        "hp" => "0812345323",
        "file" => "enrio.jpg"
    ],
    [
        "nim" => "2025B1K",
        "nama" => "Penaldo",
        "alamat" => "Portugal",
        "hp" => "080301930",
        "file" => "penaldo.jpg"
    ],
    [
        "nim" => "2025B3K",
        "nama" => "Spongebob Squarepants",
        "alamat" => "Bikini Bottom",
        "hp" => "999989947",
        "file" => "spongebob.jpg"
    ],
    [
        "nim" => "2025B7K",
        "nama" => "Pessi",
        "alamat" => "Argentina",
        "hp" => "49874878",
        "file" => "pessi.jpg"
    ],
    [
        "nim" => "2025B0K",
        "nama" => "Mas Amba",
        "alamat" => "Ngawi",
        "hp" => "666999666",
        "file" => "Desain Website SuitableSpace.pdf"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Tugas 2 PHP</title>
</head>

<body>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card bg-info-subtle">
                    <div class="card-header">
                        <div class="card-title fw-bold text-center">Data Mahasiswa</div>
                        <div class="card-body">
                            <table class="table table-bordered table-info text-center">
                                <tr>
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No Hp</th>
                                    <th>Foto</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($students as $key => $student) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $student['nim'] ?></td>
                                        <td><?= $student['nama'] ?></td>
                                        <td><?= $student['alamat'] ?></td>
                                        <td><?= $student['hp'] ?></td>
                                        <td>
                                            <?php
                                            if (pathinfo($student['file'], PATHINFO_EXTENSION) == "jpg") {
                                            ?>
                                                <img src="img/<?= $student['file'] ?>" width="115" alt="">
                                            <?php
                                            } else if (pathinfo($student['file'], PATHINFO_EXTENSION) == "pdf") {
                                            ?>
                                                <a href="img/<?php echo $student['file'] ?>" target="_blank">
                                                    <?php echo $student['file'] ?>
                                                </a>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
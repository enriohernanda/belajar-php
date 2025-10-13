<?php
session_start();
session_regenerate_id();

// Jika session "email" mati, maka kembali ke halaman 9
if (empty($_SESSION['EMAIL'])) {
    header("location:9.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #081818;
    }

    .title {
        background-color: #04212C;
        color: #fff;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        border-radius: 20px;
        justify-content: center;
        width: 350px;
    }

    .title a {
        text-decoration: none;
        color: #fff;
        background-color: #054455;
        border-radius: 3px;
        padding: 5px 0;
        display: flex;
        justify-content: center;
        font-weight: bold;
        cursor: pointer;
    }
</style>

<body>
    <div class="title">
        <h1>Selamat Datang <?php echo $_SESSION['EMAIL'] ?>!</h1>
        <a href="logout.php">Log-out</a>
    </div>
</body>

</html>
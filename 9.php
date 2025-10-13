<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

form {
    background-color: #04212C;
    color: #fff;
    padding: 2rem;
    display: flex;
    flex-direction: column;
    border-radius: 20px;
    height: 250px;
    width: 350px;
}

label {
    font-weight: bold;
}

input {
    border-radius: 8px;
    height: 30px;
}

button {
    margin-top: 1.5rem;
    background-color: #054455;
    color: #fff;
    font-weight: bold;
    padding: 8px;
    border-radius: 10px;
    cursor: pointer;
}
</style>

<?php
session_start();
session_regenerate_id();
if (isset($_POST['login'])) {
    $inputkanEmail = htmlspecialchars($_POST["email"]);
    $inputkanPassword = htmlspecialchars($_POST["password"]);

    $users = [
        [
            "email" => "sugeng@gmail.com",
            "pass" => "12345678"
        ],
        [
            "email" => "rani@gmail.com",
            "pass" => "12345"
        ],
        [
            "email" => "dimas@gmail.com",
            "pass" => "1234567"
        ],
    ];

    foreach ($users as $user) {
        if ($inputkanEmail == $user['email'] && $inputkanPassword == $user['pass']) {
            $_SESSION["EMAIL"] = $user["email"];
            header("location:dashboard.php");
            die;
        } else {
            header("location:9.php?error=invalid");
        }
    }
}

?>

<body>
    <?php
    if (isset($_GET['error']) && $_GET["error"] == "invalid") {
        echo "<script>alert('Email atau Password salah');</script>";
    }
    ?>
    <form action="" method="post">
        <label for="">Email</label><br>
        <input type="email" name="email" placeholder="masukkan email" required><br>
        <label for="">Password</label><br>
        <input type="password" name="password" placeholder="masukkan password" required><br>
        <?php
        // if (isset($_SESSION['EMAIL'])) {
        //     echo "<a href='dashboard.php'>Home</a>";
        // }
        ?>
        <button type='submit' name='login'>Login</button>
    </form>
</body>

</html>
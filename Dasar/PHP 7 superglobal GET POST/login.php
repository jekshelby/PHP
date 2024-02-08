<?php
    // cek submit udah ditekan atau belum
if (isset($_POST["submit"])) {
    // cek username sudah diisi atau belum
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        header("Location: latihan.php");
        exit;
    } else {
        // rdirect
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($error)) :?>
<p>username/password anda salah</p>
    <?php endif ;?>
<h1>LOGIN</h1>

    <ul>
    <form action="" method="post">
    <li>
        <label for="username" name="username">Username</label>
        <input type="text" name="username" id="username">
    </li>
        <li><label for="password" name="password">Username</label>
        <input type="password" name="password" id="password">
    </li>
    <button type="submit" name="submit">login</button>
    </form>
    </ul>
</body>
</html>
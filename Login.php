<?php

$username = "admin";
$password = "admin";


if (isset($_POST["submit"])) {

    if ($_POST["username"] === $username && $_POST["password"] === $password) {

        header("Location: index.php");
    } else {
        $err = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
        <h1>LOGIN</h1>
<?php
if (isset($err)) :?>
        <p>username / password salah</p>
<?php endif; ?>

        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br>

            <button type="submit" name="submit">Login</button>

            
        </form>

</body>
</html>
<?php

// Mengimpor file Database.php yang berisi koneksi ke database
include("../Service/Database.php");

// Variabel untuk menampung pesan sukses atau gagal saat register
$message = '';

// Mengecek apakah form dengan metode POST telah dikirim, khususnya tombol "register"
if(isset($_POST["register"])) {

    // Menyimpan input username dan password dari form ke dalam variabel
    $username = $_POST["username"];
    $password = $_POST["password"];


    
    // Membuat query SQL untuk menambahkan data pengguna baru ke tabel users
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
   
    if($db->query($sql)){
        $message = "Register berhasil"; // Jika berhasil, simpan pesan sukses
    } else {
        $message = "Register gagal"; // Jika gagal, simpan pesan gagal
    }

    // Menutup koneksi database setelah eksekusi selesai
    $db->close();
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 0 1rem;
        }

        /* Centered form container */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        /* Form styling */
        .form-box {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .form-box h1 {
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            color: #333;
        }

        .form-box label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #333;
            text-align: left;
        }

        .form-box input {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-box button {
            width: 100%;
            padding: 0.7rem;
            border: none;
            border-radius: 4px;
            background-color: #333;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
        }

        .form-box button:hover {
            background-color: #555;
        }

        .form-box a {
            display: block;
            margin-top: 1rem;
            color: #333;
            text-decoration: none;
        }

        .form-box a:hover {
            color: #555;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <?php include("../Layouts/Navbar.html"); ?>
    </div>

    <!-- Register Form -->
    <div class="container">
        <div class="form-box">
            <h1>Register</h1>
            <h3><?= $message ?></h3>
            <form action="register.php" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>

                <button type="submit" name="register">Register</button>
                <a href="Login.php">Sudah punya akun?</a>
            </form>
        </div>
    </div>

</body>
</html>

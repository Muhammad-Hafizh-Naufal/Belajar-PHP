<?php

// Mengimport file Database.php yang berisi koneksi ke database
include("../Service/Database.php");

// Memulai sesi untuk mengelola data session
session_start();

// Variabel untuk menampung pesan sukses atau gagal saat register
$message = '';


// Mengecek apakah form dengan metode POST telah dikirim, khususnya tombol "login"
if(isset($_POST["login"])) {

      // Menyimpan input username dan password dari form ke dalam variabel
       $username = $_POST["username"];
       $password = $_POST["password"];


        // Query untuk mencari username dan password yang cocok di dalam tabel users
       $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

       // Menjalankan query dan menyimpan hasilnya
       $result = $db->query($sql);
        
       // Memeriksa apakah ada hasil (artinya username dan password benar)
       if($result->num_rows > 0) {
                $data = $result->fetch_assoc();
               

        // Menyimpan data login ke dalam session
        $_SESSION["username"] = $data["username"];
        $_SESSION["is_login"] = true;


         // Mengarahkan pengguna ke halaman Dashboard
         header("Location: ./Dasboard.php");
       
       // Menampilkan pesan jika login gagal       
        } else {
                $message = "Login gagal";
        }

        // Menutup koneksi database
        $db->close();
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    <!-- Login Form -->
    <div class="container">
        <div class="form-box">
            <h1>Login</h1>
            <h3> <?= $message ?> </h3>
            <form action="" method="post">
                
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>

                <button type="submit" name="login">Login</button>
                <a href="Register.php">Belum punya akun?</a>
            </form>
        </div>
    </div>

</body>
</html>

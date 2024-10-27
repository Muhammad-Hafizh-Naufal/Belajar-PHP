<?php

// Memulai sesi untuk mengelola data session
session_start();

// Redirect ke halaman login jika pengguna belum login
if (!isset($_SESSION["username"])) {
    header("Location: ./Login.php"); 
    exit;
}

//ika tombol logout ditekan, semua data sesi akan dihapus, sesi dihancurkan, dan pengguna akan dialihkan kembali ke halaman login.
if (isset($_POST["loout"])) {
    session_unset(); // Menghapus semua data sesi 
    session_destroy(); // Menghancurkan sesi
    header("Location: ./Login.php"); // Mengarahkan pengguna kembali ke halaman login
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Dashboard</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Dashboard Container */
        .dashboard {
            width: 400px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
        }

        /* Header */
        .dashboard-header {
            background-color: #d54ae2;
            color: #fff;
            padding: 2rem;
        }

        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 3px solid #fff;
            margin-top: -50px;
        }

        h1 {
            margin: 10px 0;
            font-size: 1.5rem;
        }

        p {
            font-size: 0.9rem;
            color: #fcfcfc;
        }

        /* Menu */
        .dashboard-menu {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
            padding: 1rem 0;
            border-top: 1px solid #ddd;
        }

        .dashboard-menu a,
        .dashboard-menu button {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem;
            border: none;
            background: none;
            cursor: pointer;
        }

        .dashboard-menu a:hover,
        .dashboard-menu button:hover {
            color: #4a90e2;
        }

        /* Main Content */
        .dashboard-content {
            padding: 1.5rem;
            text-align: left;
        }

        .info-group {
            margin-bottom: 1rem;
        }

        .info-label {
            font-weight: bold;
            color: #333;
        }

        .info-value {
            font-size: 0.9rem;
            color: #555;
            margin-top: 5px;
        }
    </style>
</head>
<body>

<div class="dashboard">
    <!-- Header -->
    <div class="dashboard-header">
        <img src="../img/p1.jpg" alt="Profile Picture" class="profile-pic">

        <!-- Tampilkan nama pengguna -->
        <h1><?= htmlspecialchars($_SESSION["username"]) ?></h1>
        <p>Web Developer</p>
    </div>

    <!-- Menu -->
    <div class="dashboard-menu">
        <a href="#">Profile</a>
        <a href="#">Settings</a>
        <form action="" method="post" style="display:inline;">
            <button name="logout" type="submit">Logout</button>
        </form>
    </div>

    <!-- Main Content -->
    <div class="dashboard-content">
        <div class="info-group">
            <div class="info-label">Email:</div>

            <!-- Tampilkan email pengguna -->
            <div class="info-value"><?= $_SESSION["username"]?>@gmail.com</div>
        </div>
        <div class="info-group">
            <div class="info-label">Phone:</div>
            <div class="info-value">+123 456 7890</div>
        </div>
        <div class="info-group">
            <div class="info-label">Location:</div>
            <div class="info-value">San lasvegas, CA</div>
        </div>
    </div>
</div>

</body>
</html>

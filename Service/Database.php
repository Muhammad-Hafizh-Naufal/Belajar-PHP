<?php

// Konfigurasi Database
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "list_mhs"; // sesuaikan dengan nama database yang dibuat

$db = mysqli_connect($hostname, $username, $password, $database_name);

if(!$db){
    echo "Koneksi database gagal: " . !$db;
    die("error: " . !$db);
}

?>
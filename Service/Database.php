<?php

// Konfigurasi Database
$hostname = "localhost"; // sesuaikan dengan host
$username = "root"; // sesuaikan dengan username
$password = ""; // sesuaikan dengan password
$database_name = "list_mhs"; // sesuaikan dengan nama database yang dibuat

$db = mysqli_connect($hostname, $username, $password, $database_name); // Mengkoneksikan ke database

// Cek koneksi
if(!$db){
    echo "Koneksi database gagal: " . !$db;
    die("error: " . !$db);
};

// Fungsi query untuk mengambil data dari database
function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


?>
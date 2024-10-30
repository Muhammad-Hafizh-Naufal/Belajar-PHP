<?php

// menghubungkan ke file service
include("Service/Service.php");

// mengambil data npm dari url
$npm = $_GET["npm"];

// memanggil fungsi hapus
if (hapus($npm) > 0) {

    echo "<script> alert('data berhasil di hapus'); 
    document.location.href = 'index.php';
    </script>";
} else {
    echo "<script> alert('data gagal di hapus'); 
    document.location.href = 'index.php';
    </script>";
}

?>
<?php

// Menghubungkan ke file service
include("Service/Service.php");

// Menghubungkan ke tabel mahasiswa
$mahasiswa =  query("SELECT * FROM mahasiswa");

// Menutup koneksi database
mysqli_close($db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Npm</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>


        <!-- Fetch Data Dari Database -->
         <?php $i = 1 ?>
         <!-- Menggunakan `foreach` untuk loop setiap item dalam array `$mahasiswa` -->
        <?php foreach ($mahasiswa as $mhs) :
        ?>
        <tr>
            <td><?php echo $i++  ?></td>
            <td>
                <a href="">Edit</a> |
                <a href="hapus.php?npm=<?= $mhs["npm"] ?>">Delete</a>
            </td>
            <td><?= $mhs["npm"] ?></td>
            <td><?= $mhs["nama"] ?></td>
            <td><?= $mhs["kelas"] ?></td>

            
        </tr>

        <?php endforeach;
        ?>

    </table>

</body>
</html>
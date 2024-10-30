<?php

// Menghubungkan ke file service
include("Service/Service.php");

// Menghubungkan ke tabel mahasiswa
$mahasiswa =  query("SELECT * FROM mahasiswa");

// Cek apakah tombol cari di tekan
if(isset($_POST["cari"])) {

    // Jika tombol cari di tekan, lakukan pencarian
    $mahasiswa = cari($_POST["keyword"]); // variabel mahasiswa di tiban dengan yang baru jika cari di tekan
}

// Menutup koneksi database
mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col">
                <h1 class="display-6">Daftar Mahasiswa</h1>
               
            </div>
           
            <div class="col text-end">
                <a href="tambah.php" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Tambah Data Mahasiswa
                </a>
                <form action="" method="post" class="mt-3">
                    <input type="text" name="keyword" id="keyword" placeholder="mencari">
                    <button class="btn btn-primary" type="submit" name="cari" id="tombol-cari">Cari</button>
                </form>
            </div>
            
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Aksi</th>
                                <th scope="col">NPM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="ubah.php?npm=<?= $mhs["npm"] ?>" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <a href="hapus.php?npm=<?= $mhs["npm"] ?>" 
                                           class="btn btn-danger btn-sm" 
                                           onclick="return confirm('Yakin ingin menghapus data?')">
                                            <i class="bi bi-trash"></i> Delete
                                        </a>
                                    </div>
                                </td>
                                <td><?= $mhs["npm"] ?></td>
                                <td><?= $mhs["nama"] ?></td>
                                <td><?= $mhs["kelas"] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
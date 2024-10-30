<?php
include("Service/Service.php");

// mengambil npm dari url
$npm = $_GET["npm"];

// mengambil data mahasiswa berdasarkan npm
$dataMhs = query("SELECT * FROM mahasiswa WHERE npm = '$npm'")[0]; ;


// cek apakah tombol submit sudah di tekan
if(isset($_POST['submit'])) {


    // cek apakah data berhasil di Ubah
    if(ubah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil di Ubah!');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal di Ubah!');
              </script>";
        mysqli_error($db);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">
                            <i class="bi bi-person-plus"></i> Ubah Data Mahasiswa
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="npm" class="form-label">NPM</label>
                                <input type="text" class="form-control" name="npm" id="npm" required
                                       placeholder="Masukkan NPM" value="<?= $dataMhs["npm"] ?>">
                            </div>
                            
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" required
                                       placeholder="Masukkan nama" value="<?= $dataMhs["nama"] ?>">
                            </div>
                            
                            <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <input type="text" class="form-control" name="kelas" id="kelas" required
                                       placeholder="Masukkan kelas" value="<?= $dataMhs["kelas"] ?>">
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="bi bi-save"></i> Simpan Data
                                </button>
                                <a href="index.php" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left"></i> Kembali
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
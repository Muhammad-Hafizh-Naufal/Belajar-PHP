<?php
include("Service/Service.php");

// cek apakah tombol submit sudah di tekan
if(isset($_POST['submit'])) {

    // cek apakah data berhasil ditambahkan
if(tambah($_POST) > 0) {
    echo "data berhasil ditambahkan";
    header("Location: index.php");
} else {
    echo "data gagal ditambahkan";
    mysqli_error($db);
}


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    

<form action="" method="post" >

<label for="npm">Masukan npm: </label>
<br>
<input type="text" name="npm" id="npm" required>
<br>
<label for="nama">Masukan nama: </label>
<br>
<input type="text" name="nama" id="nama" required>
<br>    
<label for="kelas">Masukan kelas: </label>
<br>
<input type="text" name="kelas" id="kelas" required>

<button type="submit" name="submit" >Submit</button>

</form>

</body>
</html>
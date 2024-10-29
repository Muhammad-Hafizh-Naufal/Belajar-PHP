<?php

include("Service/Database.php");

// cek apakah tombol submit sudah di tekan
if(isset($_POST['submit'])) {

    // meyimpan data yang di kirim dari form
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];


    // query insert data
    $query = "INSERT INTO mahasiswa VALUES('$npm', '$nama', '$kelas')";
    mysqli_query($db, $query);

    // cek apakah data berhasil ditambahkan
    if (mysqli_affected_rows($db) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
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
    

<form action="" method="post">

<label for="npm">Masukan npm: </label>
<br>
<input type="text" name="npm" id="npm">
<br>
<label for="nama">Masukan nama: </label>
<br>
<input type="text" name="nama" id="nama">
<br>    
<label for="kelas">Masukan kelas: </label>
<br>
<input type="text" name="kelas" id="kelas">

<button type="submit" name="submit" >Submit</button>

</form>

</body>
</html>
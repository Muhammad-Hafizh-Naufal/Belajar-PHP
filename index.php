<?php

$mahasiswa = [
    [
        "npm" => "10122919",
        "nama" => "Muhammad Hafizh Naufal",
        "jurusan" => "Sistem Informasi",
    ],
    [
        "npm" => "10111213",
        "nama" => "Muhammad Sumbul",
        "jurusan" => "Ekonomi",
    ],
    [
        "npm" => "12345678",
        "nama" => "Khaled Kasmiri",
        "jurusan" => "Teknik Pertambangan",
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs) :?>

    <ul>
    <li>
        <a href="Detailmhs.php?
        npm=<?php echo $mhs["npm"]; ?>
        &nama=<?php echo $mhs["nama"]; ?>   
        &jurusan=<?php echo $mhs["jurusan"]; ?>
       
        ">
        <?php echo $mhs["nama"]; ?></a>
    </li>
</ul>

    <?php endforeach ?>



</body>
</html>
<?php


$mahasiswa = [
    [
        "npm" => "10122919",
        "nama" => "Muhammad Hafizh Naufal",
        "jurusan" => "Sistem Informasi",
        "img" => "/img/p1.jpg",
    ],
    [
        "npm" => "10111213",
        "nama" => "Muhammad Sumbul",
        "jurusan" => "Ekonomi",
        "img" => "/img/p2.jpg",
    ],
    [
        "npm" => "12345678",
        "nama" => "Khaled Kasmiri",
        "jurusan" => "Teknik Pertambangan",
        "img" => "/img/p3.jpg",
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
        &img=<?php echo $mhs["img"]; ?>
       
        ">
        
        <?php echo $mhs["nama"]; ?></a>
    </li>
</ul>

    <?php endforeach ?>



</body>
</html>
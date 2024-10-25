<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mhs</title>
</head>
<body>
    
<h1>Detail Mahasiswa</h1>



<ul>
    <li><img src="<?php  echo $_GET["img"] ?>" alt="" width="100"></li>
    <li><?php  echo $_GET["npm"] ?></li>
    <li><?php  echo  $_GET["nama"]; ?></li>
    <li><?php  echo $_GET["jurusan"]; ?></li>

</ul>


</body>
</html>
<?php
// File service berisi logika CRUD (Create, Read, Update, Delete)

include("Database.php");

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


// Fungsi tambah data
function tambah($data){
    
    global $db;
 
     // meyimpan data yang di kirim dari form
     $npm = htmlspecialchars($data['npm']); // htmlspecialchars() digunakan untuk mengantisipasi inputan user yang menguanakntai tag html
     $nama = htmlspecialchars($data['nama']);
     $kelas = htmlspecialchars($data['kelas']);

       // query insert data
    $query = "INSERT INTO mahasiswa VALUES('$npm', '$nama', '$kelas')";
    mysqli_query($db, $query); // menguanaknti query pada database
 
    return mysqli_affected_rows($db); // mengembalikan angka 0 jika gagal dan 1 jika sukses
}

// Fungsi hapus data
function hapus($npm){


    global $db;

    // query delete data
    $query = "DELETE FROM mahasiswa WHERE npm = '$npm'";
    mysqli_query($db,$query); // menguanaknti query pada database

    return mysqli_affected_rows($db); // mengembalikan angka 0 jika gagal dan 1 jika sukses
}

// Fungsi ubah data
function ubah($data){

    global $db;
 
    // meyimpan data yang di kirim dari form
    $npm = htmlspecialchars($data['npm']); // htmlspecialchars() digunakan untuk mengantisipasi inputan user yang menguanakntai tag html
    $nama = htmlspecialchars($data['nama']);
    $kelas = htmlspecialchars($data['kelas']);

      // query insert data
   $query = "UPDATE mahasiswa SET npm = '$npm', nama = '$nama', kelas = '$kelas' WHERE npm = '$npm'";
   mysqli_query($db, $query); // menguanaknti query pada database

   return mysqli_affected_rows($db); //
}

// Fungsi cari
function cari($keyword){

    // query cari
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR npm LIKE '%$keyword%' OR kelas LIKE '%$keyword%'";

    // memanggil fungsi query 
    return query($query);
}

?>

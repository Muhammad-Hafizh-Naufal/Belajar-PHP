<?php
// Fungsi untuk mencetak matriks spiral
function buatMatriksSpiral($n) {
    $matriks = array_fill(0, $n, array_fill(0, $n, 0)); // Inisialisasi matriks
    $atas = 0; $bawah = $n - 1; $kiri = 0; $kanan = $n - 1; // Batas-batas
    $angka = 1; // Nilai awal

    while ($atas <= $bawah && $kiri <= $kanan) {
        // Isi dari kiri ke kanan
        for ($i = $kiri; $i <= $kanan; $i++) $matriks[$atas][$i] = $angka++;
        $atas++;

        // Isi dari atas ke bawah
        for ($i = $atas; $i <= $bawah; $i++) $matriks[$i][$kanan] = $angka++;
        $kanan--;

        // Isi dari kanan ke kiri
        if ($atas <= $bawah) {
            for ($i = $kanan; $i >= $kiri; $i--) $matriks[$bawah][$i] = $angka++;
            $bawah--;
        }

        // Isi dari bawah ke atas
        if ($kiri <= $kanan) {
            for ($i = $bawah; $i >= $atas; $i--) $matriks[$i][$kiri] = $angka++;
            $kiri++;
        }
    }

    // Cetak matriks
    foreach ($matriks as $baris) {
        echo implode("\t", $baris) . "\n"; // Menggunakan implode untuk mencetak baris
    }
}

// Program utama

$n = intval(readline("Masukkan ukuran matriks (n x n): "));

if ($n > 0) {
    buatMatriksSpiral($n);
} else {
    echo "Ukuran matriks harus bilangan bulat positif.\n";
}
?>

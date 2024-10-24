<?php
// Program utama
echo "Masukkan Nama Mahasiswa: ";
$nama = trim(fgets(STDIN));

echo "Masukkan Nilai Ujian 1: ";
$nilai1 = intval(fgets(STDIN));

echo "Masukkan Nilai Ujian 2: ";
$nilai2 = intval(fgets(STDIN));

echo "Masukkan Nilai Ujian 3: ";
$nilai3 = intval(fgets(STDIN));

// Hitung rata-rata
$rataRata = ($nilai1 + $nilai2 + $nilai3) / 3;

// Tentukan predikat dengan if-else
if ($rataRata >= 85) {
    $predikat = "A";
} elseif ($rataRata >= 70) {
    $predikat = "B";
} elseif ($rataRata >= 60) {
    $predikat = "C";
} elseif ($rataRata >= 50) {
    $predikat = "D";
} else {
    $predikat = "E";
}

// Output hasil
echo "\n===== Hasil Penilaian =====\n";
echo "Nama: $nama\nRata-rata: " . number_format($rataRata, 2) . "\nPredikat: $predikat\n";
?>

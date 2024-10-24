<?php
echo "Kalkulator Menggunakan Switch-case\n";

$input1 = readline('Masukkan angka pertama: ');
$input2 = readline('Masukkan angka kedua: ');
$operator = readline('Masukkan operasi (Tambah, Kurang, Kali, Bagi): ');

switch($operator){
    case "Tambah":
        $hasil = $input1 + $input2;
        echo "Hasil: $input1 + $input2 = $hasil\n";
        break;
    case "Kurang":
        $hasil = $input1 - $input2;
        echo "Hasil: $input1 - $input2 = $hasil\n";
        break;
    case "Kali":
        $hasil = $input1 * $input2;
        echo "Hasil: $input1 * $input2 = $hasil\n";
        break;
    case "Bagi":
        if ($input2 != 0) {
            $hasil = $input1 / $input2;
            echo "Hasil: $input1 / $input2 = $hasil\n";
        } else {
            echo "Pembagian dengan nol tidak diperbolehkan!\n";
        }
        break;
    default:
        echo "Operasi tidak dikenal.\n";
}
?>

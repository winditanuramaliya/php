<?php
// 1. Fungsi untuk menentukan bilangan terbesar
function bilanganTerbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$bil1 = 100;
$bil2 = 150;
echo "Bilangan terbesar dari $bil1 dan $bil2 adalah: " . bilanganTerbesar($bil1, $bil2);
echo "<br><br>";

// 2. Tampilkan Tanggal, Bulan, Tahun dengan getdate()
$sekarang = getdate();
$tanggal = $sekarang['mday'];
$bulan = $sekarang['mon'];
$tahun = $sekarang['year'];
echo "Tanggal sekarang (getdate): $tanggal-$bulan-$tahun";
echo "<br><br>";

// 3. Tampilkan Tanggal, Bulan, Tahun dengan date()
echo "Tanggal sekarang (date): " . date('d-F-Y');
?>

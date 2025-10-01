<?php  
echo "MEMBUAT FUNGSI <br>";

// Fungsi berhasil
function berhasil() {
    echo "SELAMAT ANDA BERHASIL";
}

// Fungsi gagal
function gagal() {
    echo "MAAF ANDA GAGAL";
}

// Cek nilai
$nilai = 90;
if ($nilai >= 75) {
    berhasil();
} else {
    gagal();
}

echo "<br><br>";
echo "FUNGSI DENGAN PARAMETER<br>";

// Fungsi dengan parameter
function jumlah($a, $b) {
    return $a + $b;
}

$nilai1 = 10;
$nilai2 = 15;
echo jumlah($nilai1, $nilai2); // memanggil fungsi dengan parameter

echo "<br><br>";
echo "FUNGSI BAWAAN<br>";

// Fungsi bawaan getdate()
$sekarang = getdate();
print_r($sekarang); // hasilnya berupa array

echo "<br>";

// Menampilkan elemen tertentu (tanggal sekarang)
// Perbaikan: kunci array "mday" harus tanpa spasi
echo "Sekarang Tanggal : " . $sekarang["mday"];
?>

<?php
$sekarang = getdate();
$tanggal = $sekarang['mday'];
$bulan = $sekarang['mon'];
$tahun = $sekarang['year'];

echo "Tanggal sekarang (versi getdate): $tanggal-$bulan-$tahun";
?>

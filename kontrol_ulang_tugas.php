<?php
echo "<h2>Angka dari 100 sampai 1000</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Angka</th><th>Kelipatan 100?</th><th>Genap/Ganjil</th></tr>";

for ($i = 100; $i <= 1000; $i++) {
    // Cek kelipatan 100
    $kelipatan = ($i % 100 == 0) ? "Ya" : "-";

    // Cek genap atau ganjil
    $jenis = ($i % 2 == 0) ? "Genap" : "Ganjil";

    // Tampilkan ke dalam tabel
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>$kelipatan</td>";
    echo "<td>$jenis</td>";
    echo "</tr>";
}

echo "</table>";
?>

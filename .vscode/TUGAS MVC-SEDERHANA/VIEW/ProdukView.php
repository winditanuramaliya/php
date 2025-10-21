<?php

class ProdukView {
    public function render($dataBuku) {
        echo "<h1>Daftar Buku Perpustakaan</h1>";
        echo "<table border='1' cellpadding='8'>";
        echo "<tr><th>Judul</th><th>Pengarang</th><th>Tahun Terbit</th></tr>";

        foreach ($dataBuku as $buku) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($buku['judul']) . "</td>";
            echo "<td>" . htmlspecialchars($buku['pengarang']) . "</td>";
            echo "<td>" . htmlspecialchars($buku['tahun']) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
}

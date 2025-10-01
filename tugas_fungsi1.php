<?php
function bilanganTerbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Contoh penggunaan
$bil1 = 100;
$bil2 = 150;
echo "Bilangan terbesar dari $bil1 dan $bil2 adalah: " . bilanganTerbesar($bil1, $bil2);
?>

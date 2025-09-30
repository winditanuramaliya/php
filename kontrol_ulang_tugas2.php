<?php
// Contoh validasi sederhana username dan password dari form (POST)

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username == '' || $password == '') {
    echo "Username dan password wajib diisi!";
} else {
    // Misal validasi login sederhana (username: admin, password: 1234)
    if ($username == 'admin' && $password == '1234') {
        echo "Login berhasil! Selamat datang, $username.";
    } else {
        echo "Username atau password salah!";
    }
}
?>

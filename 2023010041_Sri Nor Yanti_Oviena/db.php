<?php
$servername = "localhost"; // Host database, biasanya localhost
$username = "root"; // Username database
$password = ""; // Password database
$dbname = "oviena_gamis"; // Nama database yang telah dibuat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

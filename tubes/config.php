<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "pw2023_223040149";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>

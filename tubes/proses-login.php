<?php
require "./admin/koneksi.php";
session_start();

// ambil payload login
$username = $_POST["username"];
$password = $_POST["password"];

// cocokan payload username & password dengan database
$stmt = $koneksi->prepare("SELECT username, password FROM user WHERE username=? AND password=?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

// ketika username dan password sama,
// maka set session agar datanya global
if ($result->num_rows > 0) {
    echo "<script>alert('Wow! User Login Completed');</script>";
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    header("location:index.php");
    exit;
} else {
    echo "<script>alert('Whoops! Username Atau Password Salah');</script>";
    header("location:login.php");
    exit;
}
?>
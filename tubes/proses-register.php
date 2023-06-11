<?php
require "./admin/koneksi.php";

// ambil payload login
$username = $_POST["username"];
$password = $_POST["password"];

// masukan payload ke database
$sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
$result = $koneksi->query($sql);

if ($result) {
    echo "<script>alert('Wow! User Registration Completed');</script>";
    $username = "";
    $_POST['password'] = "";
}else {
    if ($koneksi->errno == 1062) {
        echo "<script>alert('Whoops! Username Already Exists');</script>";
    } else {
        echo "<script>alert('Whoops! Something went wrong');</script>";
    }
}
header("location:login.php");

?>
<?php 
require "koneksi.php";

// 1.ambil data dari payload
$nama_produk = $_POST["nama_produk"];
$deskripsi = $_POST["deskripsi"];

// 2.masukan payload ke database
$sql = "INSERT INTO produk (nama_produk, deskripsi, gambar) VALUES ('$nama_produk', '$deskripsi', '')";
$koneksi->query($sql);

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "datasaya";

// Create connection
$koneksi = new mysqli($servername, $username, $password, $database);
$data = "test hahaha";

// Check connection
if ($koneksi->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
<?php
// Sesuaikan dengan URL project kalian
define('BASE_URL', '/pw2023_223040149/tubes1/');

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'datasaya') or die('KONEKSI GAGAL!');
  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah ($data){
  $conn = koneksi();
  $email = $data['email'];
  $password = $data['password'];
  $cppassword = $data['cppassword'];
  $query = "INSERT INTO gacoran (email, password, , cppassword) 
                        VALUES 
                          ('$email', '$password', '$cppassword')";
  mysqli_query($conn, $query) or die (mysqli_error($conn)) ;

  return mysqli_affected_rows($conn);
}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die;
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === $uri) ? 'active' : '';
}



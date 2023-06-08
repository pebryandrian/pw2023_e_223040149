<?php
// Sesuaikan dengan URL project kalian
define('BASE_URL', '/pw2023_223040149/kuliah/pertemuan13/');

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040149') or die('KONEKSI GAGAL!');
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
  $nim = $data['nim'];
  $nama = $data['nama'];
  $email = $data['email'];
  $jurusan = $data['jurusan'];
  $gambar = $data['gambar'];
  $query = "INSERT INTO mahasiswa (nim, nama, jurusan, email, gambar) 
                        VALUES 
                          ('$nim', '$nama', '$jurusan', '$email', '$gambar')";
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

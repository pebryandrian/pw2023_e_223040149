<?php
require('functions.php');

$title = 'Form Tambah Data';

//insert data jika ketika tombol tambah diklik jalankan fungsi tambah
if (isset($_POST['tambah'])) {
    //cek jika data berhasil ditambah
    if(tambah($_POST) > 0 ){
        echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';    
            </script>";
    }
}


require('views/tambah.view.php');

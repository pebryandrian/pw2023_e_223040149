<?php
require('koneksi.php');

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
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <img src="../asset/img/gacoran_bg.jpg" alt="">

    <div class="container">
        <form action="proses-register.php" method="POST" class="login-email">
            <p style="font-size: 2rem; font weight:850; margin-bottom: 20px; margin-top:-10px;">REGISTER</p>
            <div class="input-group"><input type="text" placeholder="username" name="username" value=""></div>
            <div class="input-group"><input type="password" placeholder="Password" name="password" value=""></div>
            <div class="input-group"><input type="password" placeholder="Confirm Password" name="cppassword" value="">
            </div>
            <div class="input-group"><button name="submit" class="btn">Register</button></div>
            <p class="login-register-text">Have an Account?<a href="login.php"> Login</a></p>
        </form>
    </div>

</body>

</html>
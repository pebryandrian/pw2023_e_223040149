    <?php require "./admin/koneksi.php";
    
    
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="container">
            <form action="proses-login.php" method="POST" class="login-email">
                <p style="font-size: 2rem; font-weight: 850; margin-bottom: 20px; margin-top:-10px;">LOGIN</p>
                <div class="input-group"><input type="username" placeholder="Username" name="username" required></div>
                <div class="input-group"><input type="password" placeholder="Password" name="password" required></div>
                <div class="input-group"><button name="submit" class="btn">LOGIN</button></div>
                <p class="login-register-text">Don't Have an Account? <a href="registrasi.php">Register</a></p>
            </form>
        </div>
    </body>

    </html>
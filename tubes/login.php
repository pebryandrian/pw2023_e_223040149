<?php 
     include "config.php";
     error_reporting(0);
     session_start();
     if(isset($_SESSION['username'])){
        header("location: index.php");
    }
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql = "SELECT*FROM users WHERE email='$email' AND
        $password='password'";
        $result=mysqli_query($conn, $sql);
        if ($result->num_rows>0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username']= $row ['username'];
            header("location: register.php");
        }
        else{
            echo"<script>alert('Whoops! Email Atau Password Salah');</script>";
        }
    }
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
        <form action="" method="POST" class="login-email">
            <p style="font-size: 2rem; font weight:850;">LOGIN</p>
            <div class="input-group"><input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>"required></div>
            <div class="input-group"><input type="text" placeholder="Password" name="password" value="<?php echo $_POST['$password']; ?>"required></div>
            <div class="input-group"><button name="submit" class="btn"><a href="index.php">LOGIN</a></button></div>
            <p class="login-register-text">Don't Have an Account?<a href="register.php"> Register </a></p>
        </form>
    </div>

</body>
</html>
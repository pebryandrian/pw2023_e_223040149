<?php

include "config.php";
error_reporting(0);
session_start();

if(isset($_SESSION['username'])){
    header("location: login.php");
    exit();
}

if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $_cppassword = md5($_POST["cppassword"]);

    if($password == $_cppassword){
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if($result->num_rows == 0){
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                echo "<script>alert('Wow! User Registration Completed');</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cppassword'] = "";
            }
            else{
                echo "<script>alert('Whoops! Something went wrong');</script>";
            }
        }
        else{
            echo "<script>alert('Whoops! Email Already Exists');</script>";
        }
    }
    else{
        echo "<script>alert('Password not Matched');</script>";
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
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p style="font-size: 2rem; font weight:850;">REGISTER</p>
            <div class="input-group"> <i data-feather="user"></i><input type="text" placeholder="username" name="email" value="<?php echo $email; ?>"></div>
            <div class="input-group"><input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>"></div>
            <div class="input-group"><input type="password" placeholder="password" name="password" value="<?php echo $_POST["password"]; ?>"></div>
            <div class="input-group"><input type="password" placeholder="Confirm Password" name="cppassword" value="<?php echo $_POST["cppassword"]; ?>"></div>
            <div class="input-group"><button type="submit"  class="btn">Register</button></div>
            <p class="login-register-text">Have an Account?<a href="login.php"> Login</a></p>
        </form>
    </div>
    <script>
      feather.replace()
    </script>

</body>
</html>
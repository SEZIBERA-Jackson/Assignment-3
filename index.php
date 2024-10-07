<?php
session_start(); 
include 'connection.php';
$msg="";
if (isset($_POST['login'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT username,password FROM users WHERE username='$username' AND password='$password'";
    $login=mysqli_query($conn,$sql);
    if (mysqli_num_rows($login)) {
        $_SESSION['username'] = $username;
        header('location:home.php');
    }
    else {
        $msg="You Are Not Admin";
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <center>
        <div class="reg_form">
            <h1>LOGIN FORM</h1>
            <h3>Please Fill The Form Below To Login</h3>
            <form action="" method="post">
                <p>User Name</p>
                <input type="text" name="username" id="" placeholder="Enter User Name" required>
                <p>Password</p>
                <input type="password" name="password" id="" placeholder="Enter Password" required> <BR> </BR>
                <input type="submit" name="login" id="" value="LOGIN">
                <p>If You Have Account Register <a href="register.php">Here</a></p>

            </form>
        </div>
    </center>
</body>
</html>
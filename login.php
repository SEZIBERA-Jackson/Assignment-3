<?php
include 'connection.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT username,password FROM users WHERE username='$username' AND password='$password'";
    $login = mysqli_query($conn,$sql);
    if (mysqli_num_rows($login)) {
        $_SESSION['username'] = $username;
        echo "<script>alert('Welcome On Home Page!!!');window.location.href='home.php'</script>";
        // echo 'Welcome';
    }
    else {
        echo "<script>alert('You Are Not Registered!!!');window.location.href='register.php'</script>";
    }
}
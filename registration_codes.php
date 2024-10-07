<?php
include 'connection.php';
if (isset($_POST['regist'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(username,password)VALUES('$username','$password')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo "<script>alert('Well Registered!!!');window.location.href='index.php'</script>";
        // echo'Well Registered!!!';
    }
}
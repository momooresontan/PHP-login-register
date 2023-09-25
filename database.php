<?php 
    $hostName = "localhost";
    $dbUser = "momo";
    $dbPassword = "123456";
    $dbName = "login_register";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if(!$conn){
        die("Something went wrong!");
    }
?>
<?php
    include 'function.php';
    global $conn;
    $name=$_POST['name'];
    $alamat=$_POST['alamat'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="INSERT INTO member VALUES ('','$nama','$alamat','$email','$username','$password','')";
    addData($query);
    header ("location:join-us.php");
?>
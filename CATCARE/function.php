<?php
    $conn = mysqli_connect("localhost","root","","lombok catcare center");

    function query($query){
        global $conn;
        $result = mysqli_query($conn , $query);
        $tampung = [];
        while ($row = mysqli_fetch_assoc($result)){
            $tampung[] = $row;
        }
        return $tampung;
    }

    function addData($data){
        global $conn;
        $name = $data["name"];
        $alamat = $data["alamat"];
        $email = $data["email"];
        $username = $data["username"];
        $password = $data["password"];

        $querry_insert = "INSERT INTO member VALUES ('','$name','$alamat','$email','$username','$password')";
        mysqli_query($conn , $querry_insert);

        return mysqli_affected_rows($conn);
    }
?>    

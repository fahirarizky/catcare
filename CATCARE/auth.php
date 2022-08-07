<?php
    include 'function.php';
    function auth($email,$password,$status){
        $query="SELECT * FROM $status WHERE email_$status='$email' AND pass_$status='$password'";
        $result= getData($query);
        if(mysqli_num_rows($result)){
            session_start();
            $_SESSION['login']= True; //menyimpan username pada session login
            $_SESSION['email']= $email;
            $_SESSION['status']= $status;
            if($status=='admin'){
                header('location:admin.php'); //direct ke halaman  
            }
            else if($status=='member'){
                header('location:index.php'); //direct ke halaman
            }
            else if($status=='dokter'){
                header('location:dokter.php'); //direct ke halaman
            }
            
        }
        else{
           header('location:join-us.php');
            //echo $result;
        }
    }
?>
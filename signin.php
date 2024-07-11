<?php


session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $duplicate= mysqli_query($con , "select *from user_login where email= '$email' AND password='$password'");
    if(mysqli_num_rows($duplicate)>0){
  
     header('location:add.php');
            
        }
        
    else{
        echo "<script type='text/javascript'>alert('wrong password or email ')</script> ";
        header('location:EMP.php');
            
    }
}



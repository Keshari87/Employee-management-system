<?php

session_start();

include("db.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $user_name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conpassword=$_POST['cpassword'];
    $duplicate= mysqli_query($con , "select *from user_login where name='$user_name' OR email= '$email'");
    if(mysqli_num_rows($duplicate)>0){
        echo    "<script type='text/javascript'>alert('user name or password already taken')</script> ";{
        header("location:EMP.php");}
   
    }
    else{
        if($password==$conpassword){
            $query ="insert into user_login values('$user_name','$email','$password','$conpassword')";
            mysqli_query($con,$query);
            echo "<script type='text/javascript'>alert('successfully register')</script> ";
        
        }
        else{
            echo "<script type='text/javascript'>alert('please enter valid details')</script> ";
    
    }
    header("location:add.php");
   
   
        
    }
}
?>


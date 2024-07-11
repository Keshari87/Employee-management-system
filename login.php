<?php
session_start();
$con = mysqli_connect("localhost","root","","user") or
 die(mysqli_error($con ));

if($_SERVER['REQUEST_METHOD']=="POST"){
  
    $email=$_POST['mail'];
    $password=$_POST['pass'];
    if(!empty($email)&& !empty($password)&& !is_numeric($email)){
        $query ="select*from user_login where email='$email' limit 1";
        $result= mysqli_query($con, $query);
        if( $result){
            if( $result && mysqli_num_rows( $result)>0){
                $user_data=mysqli_fetch_assoc( $result);
                if($user_data['pass']==$password)
                {
                    header("localhost: index1.php");
                    die;


                }
            }
        }
        echo "<script type='text/javascript'>alert('wrong username or password')</script> ";
    }
    else{
        echo "<script type='text/javascript'>alert('wrong username or password')</script> ";
    }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ss2.css">

</head>
<body>
    
<div class="wrapper">
        <div class="form-box login ">
            <h2>Login</h2>
           
            <form method="POST">
                
                <div class="input-box">
                    
                    <input type="email"  name="mail">
                    <lable > Email</lable>
                    
                </div>
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="password" name="pass" >
                    <lable > password</lable>
                </div>
                <div class="remember-forgot">
                    <lable > <input type ="checkbox">remember me</lable>
                    <a href="#"> forgot password?</a>              
               
                </div>
                <button type="submit" class ="btn">login </button>
                <div class="login-register"> 
                    <p>don't have an account? <a href="EMP.php" class ="register-link">Register </a></p>
                </div>
            </form>
        </div>
</div>
</body>
</html>
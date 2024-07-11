<?php
session_start();
include("db1.php");
 if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from employee_details where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
      header('location:add.php');
    }
    else{
        die(mysqli_errno($con));
    }
 }


?>
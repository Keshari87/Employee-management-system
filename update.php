<?php

session_start();
include("db1.php");
$id=$_GET['updateid'];
$sql="select *from employee_details where id=$id";
$result= mysqli_query($con,$sql);
$row= mysqli_fetch_assoc($result);
$name=$row['Name'];
$email=$row['email'];
$address=$row['address'];
$phone_no=$row['phone_no'];
$bdate=$row['date_of_birth'];
$department=$row['department'];
$qualification=$row['qualification'];
$hdate=$row['hire_date'];
$gender=$row['gender'];
$salary=$row['salary'];
if($_SERVER['REQUEST_METHOD']=="POST"){
  
   $name=mysqli_real_escape_string($con,$_POST['name']);
   $email=mysqli_real_escape_string($con,$_POST['mail']);
   $address=mysqli_real_escape_string($con,$_POST['address']);
   $phone_no=mysqli_real_escape_string($con,$_POST['phone-no']);
   $bdate=mysqli_real_escape_string($con,$_POST['date']);
   $department=mysqli_real_escape_string($con,$_POST['department']);
   $qualification=mysqli_real_escape_string($con,$_POST['qualification']);
   $hdate=mysqli_real_escape_string($con,$_POST['hdate']);
   $gender=mysqli_real_escape_string($con,$_POST['gender']);
   $salary=mysqli_real_escape_string($con,$_POST['salary']);
    $current_date= date('Y-m-d');
    if($email!==$row['email']&& $phone_no!==$row['phone_no']){
    $duplicate= mysqli_query($con , "select *from employee_details where phone_no='$phone_no' OR email= '$email'");
    if(mysqli_num_rows($duplicate)>0){
        echo    "<script type='text/javascript'>alert('phone no or email is already in database')</script> ";
    }
   }
   
    else if($hdate> $current_date || $bdate>$current_date){
      echo "<script type='text/javascript'>alert('fill the date correctly ')</script> ";
    }
    else{
    $query ="update employee_details set Name='  $name',email='$email',address='$address',phone_no= '$phone_no',
    date_of_birth='$bdate',department='$department',	qualification= '$qualification',	hire_date='$hdate',
    salary= '$salary',	gender='$gender' where id=$id ";
    $result=mysqli_query($con,$query);
    if($result){
    
      $_SESSION['status']="data updated successfully";
      header('location:add.php');
     
     
   }
   else{
      echo "error inserting data:".mysqli_error($con);
    }
    
   }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> employee-details</title>
    <link rel="stylesheet" href="hh.css">
    <style>
      .button {
         width: 100px;
    height: 30px;
    font-size: 1em;
    color: rgb(189, 117, 10);
    background: rgb(42, 29, 40);
    margin-top: 2%;
    margin-bottom: 5%;
    margin: 6%;
    border-radius: 5px;

      }
      .button a{
         text-decoration: none;
         color:rgb(189, 117, 10) ;
      }
      </style>
</head>
<body>
<div class="container">
<h2  text-align="center">Employees details</h2>
   
     
    
    <form method="POST" enctype="multipart/form-data">
    <div class="form">
    
      
        <label> Full Name:</label> <input type="text" class="text" name="name" value=<?php echo $name;?> required><br>
        <label>Email:</label>
         <input type="email" class="text" name="mail"  value=<?php echo $email;?> required><br>
         <label>Address:</label>
         <input type="text" class="text" name="address"  value=<?php echo $address;?> required><br>
         <label>Phone-no:</label>
         <input type="text" name="phone-no"  class="text"  value=<?php echo $phone_no;?> required><br>
         <label>Date-of-birth:</label>
         <input type="date" name="date"  class="text"  value=<?php echo $bdate;?> required><br>
         <label  >Department:</label>
         <select class="text" name="department"  value=<?php echo $department;?>required>
            <option >select Department</option>
            <option >IT</option>
            <option >Account</option>
            <option >HR</option>
            <option >sales</option>
            <option >Marketing</option>
         </select>
         <br>
         <label>qualification:</label>
         <select class="text" name="qualification"  value=<?php echo $qualification;?> required>
         <option >select qualification</option>
            <option >High school</option>
            <option >Bachelor's degree</option>
            <option > Master's degree</option>
            <option >Ph.D</option>
            
         </select>
         <br>
         <label>Hire-date:</label>
         <input type="date" name="hdate"  class="text"  value=<?php echo $hdate;?> required><br>
         <label  >Gender:</label>
         <select class="text" name="gender"   value=<?php echo $gender;?>required>
            <option >select Gender</option>
            <option >Male</option>
            <option >Female</option>
            <option >Other</option>
         </select><br>
            <lable> Salary:</lable>
            <input type="text" name="salary"  class="text"  value=<?php echo $salary;?> required><br>
            <input type="hidden" name= "">

         
       <br> <input type="submit" value="update" name="add" class="btn">
       
       
    </div>
    
    </form>
    <button class="button"><a href="add.php">Back</a></button>
   </div>
</body>
</html>

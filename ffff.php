<?php

session_start();
include("db1.php");
if(isset($_POST['submit'])) {
  
   
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
    $duplicate= mysqli_query($con , "select *from employee_details where phone_no='$phone_no' OR email= '$email'");
    if(mysqli_num_rows($duplicate)>0){
        echo    "<script type='text/javascript'>alert('phone no or email is already in database')</script> ";
    }
     elseif($hdate> $current_date || $bdate>$current_date){
   
   
    
      echo "<script type='text/javascript'>alert(' Date cannot be in future. ')</script> ";
    }else{
    
    $query ="insert into employee_details(Name,email,address,phone_no,date_of_birth
    ,department,qualification,hire_date,salary,gender) values('$name','$email',
    '$address','$phone_no', '$bdate','$department','$qualification', '$hdate',
    '$salary','$gender')";
    $result=mysqli_query($con,$query);
    if($result){
      $_SESSION['status']="data inserted successfully";
    header('location:Edata.php');
    }else{
      echo  "error inserting data:".mysqli_error($con);
   
   
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
    
</head>
<body>
  
<section class="header">
   <div class="container">
   <h2  text-align="center">Employees details</h2>
    
    <form method="POST">
    <div class="form">
 
      
        <label> Full Name:</label> <input type="text" class="text" name="name" style="width: 100%;" required><br>
        <label>Email:</label>
         <input type="email" class="text" name="mail" style="width: 100%;" required><br>
         <label>Address:</label>
         <input type="text" class="text" name="address" style="width: 100%;" required><br>
         <label>Phone-no:</label>
         <input type="text" name="phone-no"  class="text" placeholder="" style="width: 100%;"required><br>
         <label>Date-of-birth:</label>
         <input type="date" name="date"  class="text" placeholder="" style="width: 100%;" required><br>
         <label  >Department:</label>
         <select class="text" name="department" style="width: 100%;" required>
            <option >select Department</option>
            <option >IT</option>
            <option >Account</option>
            <option >HR</option>
            <option >sales</option>
            <option >Marketing</option>
         </select>
         <br>
         <label>qualification:</label>
         <select class="text" name="qualification" style="width: 100%;" required>
         <option >select qualification</option>
            <option >High school</option>
            <option >Bachelor's degree</option>
            <option > Master's degree</option>
            <option >Ph.D</option>
            
         </select>
         <br>
         <label>Hire-date:</label>
         <input type="date" name="hdate"  class="text" style="width: 100%;"  required><br>
         <label  >Gender:</label>
         <select class="text" name="gender" style="width: 100%;" required>
            <option >select Gender</option>
            <option >Male</option>
            <option >Female</option>
            <option >Other</option>
         </select><br>
            <lable> Salary:</lable>
            <input type="text" name="salary"  class="text" style="width: 100%;" required><br><br>
               
           
         
       <input type="submit" value="add" name="submit" class="btn">
       <input type="reset" value="clear" name="" class="btn">
      
    </div>
   
    </form>
   </div>
</section>
</body>
</html>
<script src="sweet.js"></script>

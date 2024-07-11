<?php
session_start();
include("db1.php");

   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
   .tab{
    margin-top: 40px;
   }
    
    table{
        border-spacing: 0;
        width:120vw;
        border: 3px;
        margin-left: 20px;
       

    }
    th{
        border: 1px solid #bbbbbb;
        padding: 10px;
        width: 90px;
        min-width: 40px;
        position: sticky;
        top: 0;
        background: #321;
        color: #fff;

    }
    
    </style>
</head>
<body>
<form action="" method="get">
    <div style="margin-left: 40%;margin-top:30px">
        <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" 
        placeholder="enter ID" style="margin-right: 10px;" required>
        <button type="submit" ><i class="fa-solid fa-search"></i></button>
    </div>
    <a href="add.php" style="text-decoration: none; font-size:40px;"> <i class="fa-solid fa-circle-xmark" style="margin-left: 1%; size:30px;"></i> </a>
    <div  style="margin-left:0;margin-top:50px">
        <table>
        <tr>
                 <th scope="col">ID</th>
                 
                 <th>Name</th>
                 <th>Email</th>
                 <th>Address</th>
                 <th>Phone no</th>
                 <th>Date-of-Birth</th>
                 <th>Department</th>
                 <th>Qualification</th>
                 <th>Hire-Date</th>
                 <th>Gender</th>
                 <th>Salary</th>
                
             </tr>
        <?php
        if(isset($_GET['search'])){
            
            $search=$_GET['search'];
            $sql="select *from  employee_details where id=$search";
            $sql_run= mysqli_query($con,$sql);
            if(mysqli_num_rows($sql_run)>0){
                while($row= mysqli_fetch_assoc($sql_run)){
                    $id=$row['id'];
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
                    echo '<tr>
                    <td>'.$id.'</td>
                    
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$address.'</td>
                    <td>'.$phone_no.'</td>
                    <td>'.$bdate.'</td>
                    <td>'.$department.'</td>
                    <td>'.$qualification.'</td>
                    <td>'.$hdate.'</td>
                    <td>'.$gender.'</td>
                    <td>'.$salary.'</td>
                    
                  
                
               
                    </tr>';
               
                
                
              }
                
            }
            else{
                echo "<script type='text/javascript'>alert('no  record found')</script> ";
            }
        }


?>
        </table>
    </div>
</form>
</body>
</html>
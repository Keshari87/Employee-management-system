<?php
session_start();
include("db1.php");

   

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add user</title>
   
    <link rel="stylesheet" href="add.css">
  
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
</head>
<style> 
h1{
   
    margin-left: 25%;
}

    .tab{
        width: calc(70vw - 50px);
        height: calc(100vh - 50px);
        overflow: scroll;
        border: 1px solid #ffff;
        margin-left: 25%;
        margin-top:  70px;
    }
    
    table{
        border-spacing: 0;
        width:120vw;
        border: 3px;
       

    }
    th{
        border: 1px solid #bbbbbb;
        padding: 10px;
        width: 90px;
        min-width: 40px;
        position: sticky;
        top: 0;
        background: #2a6592;
        color: #bbbbbb;

    }
    td{
        border: 1px solid #bbbbbb;
        padding: 5px;
        width: 100px;
        min-width: 50px;
        background: #8ec3eb;
        
    }
   



    </style>
<body>
<?php
    if(isset($_SESSION['status']))
    {
        ?>
        <script>alert('data updated  succsefully') </script>
       <?php
        unset( $_SESSION['status']);
    }

    ?>
    

    <div class="sidebar">
        <header class="header">EMS SYSTEM</header>
        <ul>
        <li><a  href="search.php"> <i class ="fas fa-search"> </i></a></li>
            <li><a  href="addinfo.php"> <i class ="fas fa-add"></i>Add Employee</a></li>
           
            <li><a href="#Attendance"> <i class ="fa-solid fa-clipboard-user"></i>Attendance</a></li>
            <li><a href="#"> <i class="fa-solid fa-circle-xmark"></i>Leave</a></li>
            <li><a href="#"> <i class =" fa-solid fa-bug"></i>Report</a></li>
            <li><a href="EMP.php" class="logout  class=" onclick=" return checklogout()">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">logout</span>
                </a></li>
        </ul><br>
      <div class="li">
        <a href="#"> <i class="fa-brands fa-facebook"></i></a>
            <a href="#"> <i class="fa-brands fa-square-instagram"></i></a>
            <a href="#"> <i class="fa-solid fa-envelope"></i></a>
      </div>
    </div>
    
    
     </div>
     <section class="mainm">
            <div class="main-top">
                <h1>Dashboard</h1>
               
                </div>
                <div class="main-e">
                    <div class="card">
                        
                <h3> Total Employees</h3>
                <?php
    $sql="select *from employee_details";
    $result=mysqli_query($con,$sql);
              
                if($total= mysqli_num_rows($result)){
                    echo ' <h3>'.$total. '</h3>';
                }
                else{
                    echo  ' <h3> no data </h3>';
                }
                
                
                
                ?>
                <button><a href="Edata.php" style="text-decoration: none; color:#eee">veiw</a></button>
            </div>
            <div class="card">
                         
                <h3>Attendance</h3>
                <p>80-85% per year</p>
                <button>see more</button>
            </div>
            <div class="card">
                         
                <h3>Leave request</h3>
                <p>10% per year</p>
                <button>see more</button>
            </div>
                </div>
</section>
<h1>Employees information</h1>
       <div class="tab">
     
            <table >
                
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
                        <th>Task</th>
                    </tr>
                    
           
 <?php
    $sql="select *from employee_details";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row= mysqli_fetch_assoc($result)){
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
            <td>
            <button class="" style="background:green; border-radius:5px; "><a href="update.php? updateid=' .$id.' " style="color:white;"> update</a></button>
            <button class="" onclick=" return checkdel()"  style="background:red; border-radius:5px; "><a href="delete.php? deleteid='.$id.'" " style="color:white;"> delete</a></button>
        </td>

            </tr>';
    
    
        }
      
    }
    ?>
  
     </table>
</div>

    
</body>
</html>
<script>
    function checkdel(){
        return confirm( 'are you sure you want to delete');
    }
</script>
<script>
    function checklogout(){
        return confirm( 'are you sure you want to LOGOUT');
    }
</script>

<?php
session_start();
include("db1.php");

   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        h1{
            margin-top:25px;
   margin-left: 30%;
}
   .tab{
    margin-top: 40px;
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
        background: #321;
        color: #fff;

    }
    td{
        border: 1px solid #bbbbbb;
        padding: 5px;
        width: 100px;
        min-width: 50px;
        background: #eee;
        color:solid black;
        
    }
   



    </style>
</head>
<body>
<?php
    if(isset($_SESSION['status']))
    {
        ?>
        <script>alert('record inserted  succsefully') </script>
       <?php
        unset( $_SESSION['status']);
    }

    ?>
    
<a href="add.php" style="text-decoration: none; font-size:40px;"> <i class="fa-solid fa-circle-xmark "></i> </a>
<h1>employee_details</h1>
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
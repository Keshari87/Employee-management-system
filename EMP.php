






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="kb.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body>
    <section class="header">
       <nav>
       
        <div class="nav-link">
          
            
            <button class="login">Login</button>
        </div>
       </nav> 
       <div class="text">
        <h1>EMPLOYEES MANAGEMENT SYSTEM</h1>
        <p>
        </p>
        <a href=""> visit us to know more</a>
       </div>
       </section>
  
       <div class="wrapper">

        
        <div class="form-box login ">
            <h2>Login</h2>
           
            <form  action ="signin.php" method="POST">
                
                <div class="input-box">
                    
                    <input type="email"  name="email" required>
                    <lable > Email</lable>
                    
                </div>
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="password" name="password" required >
                    <lable > password</lable>
                </div>
                <div class="remember-forgot">
                   
                    <a href="#"> forgot password?</a>              
               
                </div>
                <button type="submit" class ="btn">login </button>
                <div class="login-register"> 
                    <p>don't have an account? <a href="#" class ="register-link">Register </a></p><br>
                    
                </div>

            </form>
        </div>
        
        <div class="form-box register  ">
            <h2>Registration</h2>
            
            <form action="register.php" method="POST">
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="text" name="name" required>
                    <lable > Username</lable>
                    
                </div>
                
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="email" name="email" required>
                    <lable > Email</lable>
                    
                </div>
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="password" name="password" required>
                    <lable > password</lable>
                </div>
                    <div class="input-box">
                    <input type="password" name="cpassword" required>
                    <lable >conform password</lable>
                </div>
                <div class="remember-forgot">
                    <lable > <input type ="checkbox" required>I agree to the terms and conditions</lable>
                                  
               
                </div>
                <button type="submit" class ="btn">Register </button>
                <div class="login-register"> 
                    <p>already  have an account? <a href="#" class ="login-link">Login  </a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="jscript.js"> </script>
</body>
</html>
<?php
       
        

         if($_SERVER['REQUEST_METHOD']=='POST'){
         include 'saveTOlogin.php'; 
          $username = $_POST['uname'];
          $password = $_POST['pass'];
  
           $sql=" SELECT * FROM `signup` where username='$username' && password='$password'";
  
            $res=mysqli_query($con,$sql);
                 if($res)
                 {
                  $num=mysqli_num_rows($res);
                  if($num>0)
                  {
                          session_start();
                          $_SESSION['uname']=$username;
                          header('location:home.php');
                  }
                  else{
                          echo 'INVALID INPUTS';
                  }
            }
         }   
    
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
        <form action="index.php" method = "post">

                    <div class="gb"><h2>4K's Seaside</h2></div><br><br><br><br>

                    <h1>LOGIN</h1>

                    <div class="img"><img src="boyaks.png" alt=""></div>

                    <input type="text"name="uname"placeholder="Username:">
                    <input type="password"name="pass"placeholder="Password:">

                                <div class="hk"><p>Register here:</p></div>

                    <div class="ty"><button type="submit">LOGIN</button>
                    </div>

                    <div class="sg"><a href="signup.php">SIGNUP</a></div>
                   
                       


        </form>
</body>
</html>
<?php

require_once "saveTOlogin.php";

if($_GET)
{
      $firstname = $_GET['first'];
      $lastname = $_GET['last'];
      $pn       = $_GET['pn'];
      $email     = $_GET['email'];
      $username = $_GET['user'];
      $password = $_GET['pass'];

      $sql = "insert into signup(first,last,pn,email,user,pass) values('$firstname','$lastname',' $pn','$email','$username','$password')";
      $res = $con->query($sql);
      if($res)
              header("Location: index.php");
       else
              echo "failed2";       
} 
          
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>SIGNUP</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
        <div>
                <form action="register.php" methop = "post">
                           <div class="m"><h2 class="l">4k's Seaside</h2></div>  <br>
                           <div class="z"><label class="j">Create your Account</label></div> 
                            <div class="imgs"><img src="emman.png" alt=""></div>

                            <div class="first"><input type="text"name="first"placeholder="First Name:"class="g"require></div>

                            <div class="second"><input type="text"name="last"placeholder="Last Name:"class="h"require></div>

                            <div class="third"><input type="text"name="pn"placeholder="PhoneNo."class="y"require></div>

                            <div class="forth"><input type="text"name="email"placeholder="Email:"class="u"require></div>

                            <div class="fifth"><input type="text"name="user"placeholder="Username:"class="r"require></div>

                            <div class="six"><input type="password"name="pass"placeholder="Password:"class="s" require></div>

                           <div class="as"><button type="submit">Confirm</button></div> 
                           <div class="ui"><label class="gm">Use 8 or more characters with a mix of letters, numbers & symbols</label></div>
                </form>

        </div>
</body>
</html>
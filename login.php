<?php

  session_start();

  include("db.php");

   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
     $email = $_POST['email'];
    $upswd2 = $_POST['upswd2'];
    

      if (!empty($uname1) || !empty($email) || !empty($upswd1) || !empty($upswd2) )
      {
        $query = "select * from register where email = '$email' limit 1";
        $result = mysqli_query($con,$query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['upswd2'] ==  $upswd2 )
                {
                    header("location: index.html");
                    die;
                }
            }
        }
           echo "<script type='text/javascript'> alert('wrong username or password')</script>";
      }
      else{
           echo "<script type='text/javascript'> alert('wrong username or password')</script>";
      }
   }


?>









<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./Logo.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <form method="post" action="login.php">
            <h2>Login</h2>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

 
            <label for="password">Password:</label>
            <input type="password" id="upswd2" name="upswd2" required>

            <input type="submit" value="Login" class="btn">
	
<a href="index.html"><h4> Go To Home</h4></a>
<a href="register.php">Register for new account ?</a>

        </form>
    </div>
</body>
</html>
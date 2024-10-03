<?php
  session_start();

  include("db.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {

    $uname1 = $_POST['uname1'];
    $email = $_POST['email'];
    $upswd1 = $_POST['upswd1'];
    $upswd2 = $_POST['upswd2'];

    if (!empty($uname1) || !empty($email) || !empty($upswd1) || !empty($upswd2) )
    {
      $query = "insert into register (uname1,email,upswd1,upswd2) values(' $uname1',' $email','  $upswd1',  '$upswd2')";
      mysqli_query($con, $query);
      echo "<script type='text/javascript'> alert('Successfully Register')</script>";
    }

    else
    {
            echo "<script type='text/javascript'> alert('Please Enter Some Valid Information')</script>";
    }
  }




?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="./Logo.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Itum Reasturent</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
        <div class="logo">
          <img src="./Logo.png" alt="" />
        </div>
      <div id="menu-bar" class="fas fa-bars"></div>

      <a href="#" class="logo"><span>ITUM </span>Reasturent</a>
      <nav class="navbar">
        <a href="#Home">Home</a>
        <a href="#About">About</a>
        <a href="#Dishes">Dishes</a>
        <a href="#Menu">Menu</a>
        <a href="#Review">Review</a>
        <a href="#Order">Order</a>
      </nav>
      <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
      </div>

      <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="Search Here...." />
        <label for="search-bar" class="fas fa-search"></label>
      </form>
    </header>

    <div class="login-form-container">
      <i class="fas fa-times" id="form-close"></i>

      <form action="register.php" method="post">
        <h3>Register Here</h3>
        <p>Username</p>
        <input type="text" name="uname1" class="box" placeholder="Enter your Username" required="" />
        <p>Email</p>
        <input type="email" name="email" class="box" placeholder="Enter Your Email Id" required="" />
        <p>Password</p>
        <input type="password" name="upswd1" class="box" placeholder="Enter Password" required="" />
        <p>Retype Password</p>
        <input type="password" name="upswd2" class="box" placeholder="Re-Enter Password" required="" />
        <br><br>

        <input type="submit" value="Register" class="btn"/>

        <br><br>
        <a href="login.php">Existing user,Login!?</a>
      </form>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="app.js"></script>
  </body>
</html>

   <section class="Home" id="Home">
      <div class="content">
        <h3>Enjoy Delicious Food</h3>
        <p>
          Eating yummy food is so much fun! When you enjoy delicious meals, it's
          like a party in your mouth. The flavors dance around, making you feel
          super happy.
        </p>
        <a href="#" class="btn">See Menu</a>
      </div>

      <div class="controls">
        <span class="vid-btn active" data-src="./video1.mp4"></span>
        <span class="vid-btn" data-src="./video2.mp4"></span>
        <span class="vid-btn" data-src="./video3.mp4"></span>
        <span class="vid-btn" data-src="./video4.mp4"></span>
        <span class="vid-btn" data-src="./video5.mp4"></span>
      </div>

      <div class="video-container">
        <video src="./video1.mp4" id="video-slider" loop autoplay muted></video>
      </div>
    </section>
    <br />

      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="app.js"></script>
  </body>
</html>
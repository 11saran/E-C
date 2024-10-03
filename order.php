<?php
  session_start();

  include("db.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $Yname = $_POST['Yname'];
    $Ynumber = $_POST['Ynumber'];
    $Yorder = $_POST['Yorder'];
    $Afood = $_POST['Afood'];
    $Nooforders = $_POST['Nooforders'];
    $dateandtime = $_POST['dateandtime'];
    $Yaddress = $_POST['Yaddress'];
    $Ymessage = $_POST['Ymessage'];

    if (!empty($Yname) || !empty($Ynumber) || !empty($Yorder) || !empty($Afood) || !empty($Nooforders) || !empty($dateandtime) || !empty($Yaddress ) || !empty( $Ymessage) ) 
    {
      $query = "INSERT INTO `order` (Yname, Ynumber, Yorder, Afood, Nooforders, dateandtime, Yaddress, Ymessage) VALUES ('$Yname', '$Ynumber', '$Yorder', '$Afood', '$Nooforders', '$dateandtime', '$Yaddress', '$Ymessage')";
      mysqli_query($con, $query);
      echo "<script type='text/javascript'> alert('Your order Successfully Register')</script>";
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

    <section class="Order" id="Order">
      <h1 class="heading">Order Now</h1>

      <form action="order.php" method="post">
        <div class="inputBox">
          <div class="input">
            <span>Your Name</span>
            <input type="text" name="Yname" placeholder="Enter Your Name" required=""/>
          </div>

          <div class="input">
            <span>Your Number</span>
            <input type="number" name="Ynumber" placeholder="Enter Your Number" required="" />
          </div>
        </div>

        <div class="inputBox">
          <div class="input">
            <span>Your Order</span>
            <input type="text" name="Yorder"   placeholder="Enter Your Food Name" required="" />
          </div>

          <div class="input">
            <span>Additional Food</span>
            <input type="test" name="Afood" placeholder="Extra with Food" />
          </div>
        </div>

        <div class="inputBox">
          <div class="input">
            <span>How Much</span>
            <input type="number" name="Nooforders" placeholder="How Many Orders" required=""/>
          </div>

          <div class="input">
            <span>Date and Time</span>
            <input type="datetime-local" name="dateandtime" required=""/>
          </div>
        </div>

        <div class="inputBox">
          <div class="input">
            <span>Your Address</span>
            <textarea
              name="Yaddress" required=""
              placeholder="Enter Your Address"
              id=""
              cols="30"
              rows="10"
            ></textarea>
          </div>

          <div class="input">
            <span>Your Message</span>
            <textarea
              name="Ymessage"
              placeholder="Enter Your Message"
              id=""
              cols="30"
              rows="10"
            ></textarea>
          </div>
        </div>

        <input type="submit" value="Order Now" class="btn" />
      </form>
    </section>
    <br>

     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="app.js"></script>
  </body>
</html>
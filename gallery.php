<?php
require 'includes/class-autoload.inc.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>WeWork - About Us</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style600.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link rel="icon" type="image/png" href="img/logo.png" />
</head>

<body>

<div class="content">

<div class="header">
        <a href="index.php"><img src="img/logo.png" width="50px" height="50px"></a>

        <?php if(isset($_SESSION['name'])): ?>
        <p>Welcome, <?php echo $_SESSION['name'];?>
        <?php if($_SESSION['user_type'] == "admin" ): ?>
            <a href="admin.php">(Admin Panel)</a>
        <?php endif; ?>
        / <a href="logout.php">Logout</a></p>
    <?php else: ?>
        <p><a href="login.php">Login</a> / <a href="signup.php">Sign up</a></p>
    <?php endif; ?>

    </div>

    <div class="headermenu" id="headermenuid">
        <ul>
        <li id="icon"><a id="menuhref" href="javascript:void(0);" onclick="menu()">
        <i class="fa fa-bars"></i>
        </a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li id="active"><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="blog.php">Blog</a></li>
        </ul>
    </div>

    <div class="maincontainer">
        <h1 style="text-align: center">Gallery</h1>
        <div class="slideshow-container">


  <div class="weworkSlide fade">

    <img src="img/galery1.jpg" style="width:100%">
    <div class="text"><p>Prishtina</p></div>
  </div>

  <div class="weworkSlide fade">

    <img src="img/galery2.jpg" style="width:100%">
    <div class="text"><p>Tirana</p></div>
  </div>

  <div class="weworkSlide fade">

    <img src="img/galery3.jpg" style="width:100%">
      <div class="text"><p>Skopje</p></div>
  </div>

  <a class="prev" onclick="nextSlide(-1)">&#10094;</a>
  <a class="next" onclick="nextSlide(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="pika" onclick="cSlide(1)"></span>
  <span class="pika" onclick="cSlide(2)"></span>
  <span class="pika" onclick="cSlide(3)"></span>
</div>


</div>
    </div>
    <div class="footer">
        <p>All Rights Reserved &copy;</p>
       <p><a style="color: skyblue" href="https://github.com/BlendKrasniqi37552/WeWorkWebsite">GitHub</a> | Lirian Dragusha | Blend Krasniqi | 2020</p>
    </div>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/slide.js"></script>
</body>
</html>
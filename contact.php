<?php
require 'includes/class-autoload.inc.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>WeWork - Contact Us</title>
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
        <li><a href="gallery.php">Gallery</a></li>
        <li id="active"><a href="contact.php">Contact Us</a></li>
        <li><a href="blog.php">Blog</a></li>
        </ul>
    </div>

    <div class="maincontainer">

    <h1 style="text-align: center;">Contact Us:</h1>
    <p style="text-align:center;color:red;">
      <?php
      $pathUrl = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      if (strpos($pathUrl, "name=empty") == true) {
        echo 'Name is empty.';
      }
      elseif (strpos($pathUrl, "name=invalid") == true) {
        echo 'Name invalid, only letters allowed. Must be more than 2 characters.';
      }
      elseif (strpos($pathUrl, "email=empty") == true) {
        echo 'Email is empty.';
      }
      elseif (strpos($pathUrl, "email=invalid") == true) {
        echo 'Please enter a valid email.';
      }
      elseif (strpos($pathUrl, "city=empty") == true) {
        echo 'City is required.';
      }
      elseif (strpos($pathUrl, "placeofwork=empty") == true) {
        echo 'Place of work is required.';
      }
      elseif (strpos($pathUrl, "gender=empty") == true) {
        echo 'Gender is required';
      }
      elseif (strpos($pathUrl, "textarea=empty") == true) {
        echo 'Text area can not be empty';
      }
      elseif (strpos($pathUrl, "submit=success") == true) {
        echo 'Contact form successfully sent!';
      }
      elseif (strpos($pathUrl, "submit=failed") == true) {
        echo 'Something went wrong.';
      }
      ?>
    </p>
    <div class="forma">
    <form name="contactForm" action="includes/contact.inc.php" onsubmit="return validateContact()" method="post">
        <label for="name">Enter your name:</label><br>
        <input type="text" id="name" name="name" placeholder="Enter your name..." required>
        <br>
        <br>
        <label for="email">Enter your e-mail:</label><br>
        <input type="email" id="email" name="email" placeholder="Enter your email..." required>
        <br>
        <br>
        <label for="city">Choose a city:</label>
        <br>
        <select id="city" name="city">
            <option value="prishtina">Prishtina</option>
            <option value="beogradi">Beogradi</option>
            <option value="shkupi">Shkupi</option>
            <option value="tirana">Tirana</option>
        </select>
        <br>
        <br>
        <label for="placeofwork">Where do you prefer to work?</label>
        <br>
        <br>
        <input type="checkbox" id="placeofwork" name="placeofwork" value="home">
        <label for="home">Home</label>
        <br>
        <input type="checkbox" id="placeofwork" name="placeofwork" value="office">
        <label for="office">Office</label>
        <br>
        <input type="checkbox" id="placeofwork" name="placeofwork" value="elsewhere">
        <label for="office">Elsewhere</label>
        <br>
        <p>Please select your gender:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
        <br>
        <br>
        <label for="entertext">Enter your text:</label>
        <br>
        <textarea placeholder="Enter your text..." id="entertext" name="entertext" required></textarea>
        <br>
        <input id="button" type="submit" name="submit" value="Submit">
    </form>
    </div>

    </div>



</div>

    <div class="footer">
        <p>All Rights Reserved &copy;</p>
        <p><a style="color: skyblue" href="https://github.com/BlendKrasniqi37552/WeWorkWebsite">GitHub</a> | Lirian Dragusha | Blend Krasniqi | 2020</p>
    </div>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/contact.js"></script>
</body>
</html>

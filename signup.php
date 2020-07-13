<?php
    require 'includes/class-autoload.inc.php';
    session_start();

    $loginCheck = new LoginCheck();
    if ($loginCheck->isLogin()) {
    	header("Location: /");
    }

?>
<!DOCTYPE html>
<html>

<head>
    <title>WeWork - Signup</title>
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
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="blog.php">Blog</a></li>
        </ul>
    </div>

    <div class="maincontainer">
    <h1 style="text-align: center;">Sign up:</h1>
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
            echo 'Email is empty';
          }
          elseif (strpos($pathUrl, "email=invalid") == true) {
            echo 'Please write a valid email';
          }
          elseif (strpos($pathUrl, "password=empty") == true) {
            echo 'Password is empty';
          }
          elseif (strpos($pathUrl, "password=invalid") == true) {
            echo 'Password must have 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter.';
          }
          elseif (strpos($pathUrl, "confirmpass=empty") == true) {
            echo 'Confirm password is empty';
          }
          elseif (strpos($pathUrl, "confirmpass=invalid") == true) {
            echo 'Passwords do not match';
          }
          elseif (strpos($pathUrl, "submit=success") == true) {
            echo 'Account successfully created!';
          }
          elseif (strpos($pathUrl, "submit=failed") == true) {
            echo 'Something went wrong.';
          }
          elseif (strpos($pathUrl, "submit=exists") == true) {
            echo 'User already exists. This email is already in the database.';
          }
          ?>
        </p>
    <div class="forma">
    <form name="signupForm" action="includes/signup.inc.php" onsubmit="return validateSignup()" method="post" required>
        <label for="name">Enter your name:</label><br>
        <input type="text" id="name" name="name" placeholder="Enter your name..." required >
        <label for="email">Enter your e-mail:</label><br>
        <input type="email" id="email" name="email" placeholder="Enter your email..." required>
        <br>
        <label for="password">Enter your password:</label><br>
        <input type="password" id="password" name="password" placeholder="Enter your password..." required >
        <label for="confirmpassword">Confirm your password:</label><br>
        <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm your password..." required>
        <br>
        <br>
        <input id="button" type="submit" name="submit" value="Sign Up">
    </form>
    </div>



</div>

    <div class="footer">
        <p>All Rights Reserved &copy;</p>
        <p><a style="color: skyblue" href="https://github.com/BlendKrasniqi37552/WeWorkWebsite">GitHub</a> | Lirian Dragusha | Blend Krasniqi | 2020</p>
    </div>
    </div>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/signup.js"></script>
</body>
</html>

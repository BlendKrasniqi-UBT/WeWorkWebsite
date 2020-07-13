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
        <li id="active"><a href="about.php">About Us</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="blog.php">Blog</a></li>
        </ul>
    </div>

    <div class="maincontainer">

    <h1 style="text-align: center;">About Us</h1>
    <p>WeWork is an American commercial real estate company that provides shared workspaces for technology startups and services for other enterprises. Founded in 2010, it is headquartered in New York City. As of 2018, WeWork managed over 4 million square metres. WeWork's parent company is The We Company. WeWork designs and builds physical and virtual shared spaces and office services for entrepreneurs and companies. At one time, WeWork had more than 5,000 employees in over 280 locations, spread across 86 cities in 32 countries.</p>
    <p>When we started WeWork in 2010, we wanted to build more than beautiful, shared office spaces. We wanted to build a community. A place you join as an individual, 'me', but where you become part of a greater 'we'. A place where we’re redefining success measured by personal fulfillment, not just the bottom line. Community is our catalyst.</p>
    <br/>
    <img id="aboutphoto" src="img/aboutphoto.jpg">
    <br/>
    <p>Our mission doesn’t end with the small businesses and entrepreneurs that call us home. We believe in empowering our team to create their own life's work. We move fast and we challenge each other, but we look after each other and care about our culture, which makes working here extremely rewarding. There's a lot of work left for us to do, and we couldn't do it without a single member of our team.</p>
    <p>As a first-mover in the industry, WeWork has been a leader in fostering innovation and collaboration in the workplace for over a decade. Today, with over 600,000 members around the world, we are once again in a position to redefine what the future of work looks like as we face the new realities of a post COVID-19 world. While so much has changed—WeWork’s promise to deliver exceptional, innovative, and safe spaces, has not.</p>
    </div>

</div>

    <div class="footer">
        <p>All Rights Reserved &copy;</p>
       <p><a style="color: skyblue" href="https://github.com/BlendKrasniqi37552/WeWorkWebsite">GitHub</a> | Lirian Dragusha | Blend Krasniqi | 2020</p>
    </div>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>

<?php
require 'includes/class-autoload.inc.php';
session_start();
$home = new Home();
?>

<!DOCTYPE html>
<html>

<head>
    <title>WeWork - Home</title>
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
        <li id="active"><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="blog.php">Blog</a></li>
        </ul>
    </div>

    <div class="section1">
        <div class="section1content">
        <h1>WeWork</h1>
        <p>Office space and workspace solutions</p>
        <button id="button" onclick="location.href='about.php'" type="button">Learn More</button>
        <button id="button" onclick="location.href='contact.php'" type="button">Contact Us</button>
        </div>
    </div>

    <div class="section2">
        <h1><?php $home->FeaturesTitle(); ?></h1>
        <div class="listingrow">
        <div class="feature">
        <span style="font-size: 50px; color: #00897b;">
        <i class="fas fa-map-marker-alt"></i>
        </span>
        <h2><?php $home->FeatureTitleOne();?></h2>
        <p>Whole buildings to full or partial floors that are tailored to enhance your unique business and culture.</p>
        </div>
        <div class="feature">
        <span style="font-size: 50px; color: #00897b;">
        <i class="fas fa-people-arrows"></i>
        </span>
        <h2>Coworking Spaces</h2>
        <p>Dedicated desks or hot desks that come with access to meeting rooms, business-class printing, and common amenities.</p>
        </div>
        <div class="feature">
        <span style="font-size: 50px; color: #00897b;">
        <i class="fas fa-user-shield"></i>
        </span>
        <h2>Flexible private offices</h2>
        <p>Move-in ready offices and configurable suites that flex to accommodate teams of any size.</p>
        </div>
        </div>
    </div>

    <div class="section3">
        <div class="section3photo">
        <img id="section3photo" src="img/section3photo.jpg">
        </div>

        <div class="section3info">
        <h1>Over 500 locations worldwide</h1>
        <p>Whether you need to build a headquarters in New York, expand into the London market, or secure coworking space in Tokyo, we have office spaces to rent worldwide.</p>
        </div>
    </div>

    <div class="section4">
        <h1>Our Staff</h1>
        <div class="listingrow">
        <div class="feature">
        <img class="person" src="img/people/person1.jpg">
        <h2>Adam Neumann</h2>
        <p>CEO</p>
        </div>
        <div class="feature">
        <img class="person" src="img/people/person2.jpg">
        <h2>Laura Nelson</h2>
        <p>Executive Chairman</p>
        </div>
        <div class="feature">
       <img class="person" src="img/people/person3.jpg">
        <h2>Betta Williams</h2>
        <p>CCO</p>
        </div>
        </div>
    </div>

    <div class="section5">
        <div class="section5info">
        <h1>Moving forward, together</h1>
        <p>WeWork is deeply committed to supporting our member companies. As we look ahead to the new normal in the workplace, WeWork is redesigning our spaces for your health and safety.</p>
        </div>
        <div class="section5photo">
        <img id="section5photo" src="img/section5photo.jpg">
        </div>
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

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
        <h1><?php $home->SectionOneTitle(); ?></h1>
        <p><?php $home->SectionOneSmallTitle(); ?></p>
        <button id="button" onclick="location.href='about.php'" type="button"><?php $home->SectionOneButtonOne(); ?></button>
        <button id="button" onclick="location.href='contact.php'" type="button"><?php $home->SectionOneButtonTwo(); ?></button>
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
        <p><?php $home->FeaturesDescOne(); ?></p>
        </div>
        <div class="feature">
        <span style="font-size: 50px; color: #00897b;">
        <i class="fas fa-people-arrows"></i>
        </span>
        <h2><?php $home->FeaturesTitleTwo(); ?></h2>
        <p><?php $home->FeaturesDescTwo(); ?></p>
        </div>
        <div class="feature">
        <span style="font-size: 50px; color: #00897b;">
        <i class="fas fa-user-shield"></i>
        </span>
        <h2><?php $home->FeaturesTitleThree(); ?></h2>
        <p><?php $home->FeaturesDescThree(); ?></p>
        </div>
        </div>
    </div>

    <div class="section3">
        <div class="section3photo">
        <img id="section3photo" src="img/section3photo.jpg">
        </div>

        <div class="section3info">
        <h1><?php $home->SectionTwoTitle(); ?></h1>
        <p><?php $home->SectionTwoDesc(); ?></p>
        </div>
    </div>

    <div class="section4">
        <h1><?php $home->OurStaffTitle(); ?></h1>
        <div class="listingrow">
        <div class="feature">
        <img class="person" src="img/people/person1.jpg">
        <h2><?php $home->OurStaff1Name(); ?></h2>
        <p><?php $home->OurStaff1position(); ?></p>
        </div>
        <div class="feature">
        <img class="person" src="img/people/person2.jpg">
        <h2><?php $home->OurStaff2Name(); ?></h2>
        <p><?php $home->OurStaff2position(); ?></p>
        </div>
        <div class="feature">
       <img class="person" src="img/people/person3.jpg">
        <h2><?php $home->OurStaff3Name(); ?></h2>
        <p><?php $home->OurStaff3position(); ?></p>
        </div>
        </div>
    </div>

    <div class="section5">
        <div class="section5info">
        <h1><?php $home->SectionThreeTitle(); ?></h1>
        <p><?php $home->SectionTwoDesc(); ?></p>
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

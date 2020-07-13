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
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li id="active"><a href="blog.php">Blog</a></li>
        </ul>
    </div>

    <div class="maincontainer">
        <h1 style="text-align: center">Blog</h1>
         <div class="section6">
           <div class="addarticle">
               <form name="contactForm" action="includes/contact.inc.php" onsubmit="return validateContact()" method="post">
                <label for="title">Enter your title:</label><br>
                <input type="text" id="title" name="title" placeholder="Enter your title..." required>
                <label for="entertext">Enter your text:</label>
                <textarea placeholder="Enter your text..." id="entertext" name="entertext" required></textarea>
                  <div class="addarticleButtons">
                      <input type="file" id="myfile" name="myfile">
                      <input id="button" type="submit" name="submit" value="Submit">
                  </div>
               </form>
           </div>
        <div class="blog">
        <div class="article">
        <img class="blogimage" src="img/blog/blog.jpg">
        <h2>How to engage remote employees</h2>
        <p>Author: Blend Krasniqi</p>
        <p>Slack and video chat go only so far. Here's how to make remote workers feel like part of the team. </p>
        <button id="button" onclick="location.href='#'" type="button">Read More</button>
        </div>
        <div class="article">
        <img class="blogimage" src="img/blog/blog.jpg">
        <h2>16 tips for managing remote teams</h2>
        <p>Author: Blend Krasniqi</p>
        <p>As the workforce becomes more distributed, managers must adapt and manage remote employees.</p>
        <button id="button" onclick="location.href='#'" type="button">Read More</button>
        </div>
        <div class="article">
        <img class="blogimage" src="img/blog/blog.jpg">
        <h2>Does productivity increase when working remotely?</h2>
        <p>Author: Blend Krasniqi</p>
        <p>Studies show that it can. Here’s what businesses and employees should consider to make remote work, work.</p>
        <button id="button" onclick="location.href='#'" type="button">Read More</button>
        </div>
        <div class="article">
        <img class="blogimage" src="img/blog/blog.jpg">
        <h2>10 effective brainstorming techniques for teams</h2>
        <p>Author: Lirian Dragusha</p>
        <p>Group brainstorming, can promote creative thinking, bring a team together, and help you land on the perfect idea.</p>
        <button id="button" onclick="location.href='#'" type="button">Read More</button>
        </div>
        <div class="article">
        <img class="blogimage" src="img/blog/blog.jpg">
        <h2>How to host a virtual conference while distancing</h2>
        <p>Author: Lirian Dragusha</p>
        <p>Holding a virtual conference now supports your industry and creates relationships that can outlast a crisis.</p>
        <button id="button" onclick="location.href='#'" type="button">Read More</button>
        </div>
        <div class="article">
        <img class="blogimage" src="img/blog/blog.jpg">
        <h2>10 best videoconferencing software for remote teams</h2>
        <p>Author: Lirian Dragusha</p>
        <p>Video chat go only so far. We review the most popular solutions so that you can jump straight into working.</p>
        <button id="button" onclick="location.href='#'" type="button">Read More</button>
        </div>
        </div>
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

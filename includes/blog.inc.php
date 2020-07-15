<?php
include 'class-autoload.inc.php';
session_start();

if(!isset($_POST['submit'])){
  header("Location: /blog.php");
}

$title = $_POST['title'];
$entertext = $_POST['entertext'];
$file = $_FILES['file'];
$author = $_SESSION['name'];

$blog = new Blog($title, $entertext, $file, $author);

if (isset($_POST['submit']) && !$blog->blogValidation() ) {
$blog->uploadImage();
$blog->newBlogPost();
}

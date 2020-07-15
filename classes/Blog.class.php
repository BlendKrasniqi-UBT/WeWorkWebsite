<?php

class Blog {

  private $title;
  private $entertext;
  private $file;
  private $fileNameNew;
  private $author;
  private $errorCount;

  public function __construct($title, $entertext, $file, $author){
    $this->title = $title;
    $this->entertext = $entertext;
    $this->file = $file;
    $this->author = $author;
  }

public function uploadImage(){

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 1000000) {
        $this->fileNameNew = uniqid('', true). "." .$fileActualExt;
        $fileDestination = '../img/blog/'.$this->fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
      } else {
          header("Location: ../blog.php?file=big");
        //echo "Your file is too big!";
      }
    } else {
      header("Location: ../blog.php?file=error");
      //echo "There was an error uploading your file!";
    }
  } else {
    header("Location: ../blog.php?file=error");
  }
}

public function newBlogPost() {
  $this->connection = new DBConnection();

    $this->sql = 'INSERT INTO blog (title, author, entertext, imageurl) VALUES (:title, :author, :entertext, :imageurl)';
    $this->query = $this->connection->getConnection()->prepare($this->sql);
    $this->query->bindParam('title', $this->title);
    $this->query->bindParam('author', $this->author);
    $this->query->bindParam('entertext', $this->entertext);
    $this->query->bindParam('imageurl', $this->fileNameNew);

    if($this->query->execute()) {
        header("Location: ../blog.php?submit=success");
    } else {
        header("Location: ../blog.php?submit=failed");
    }
}

public function blogValidation(){
  if (empty($_POST['title'])) {
    header("Location: ../blog.php?title=empty");
    $this->errorCount++;
  }

  if (empty($_POST['entertext'])) {
    header("Location: ../blog.php?entertext=empty");
    $this->errorCount++;
  }

  if ($this->errorCount > 0){
  return true;
  }
  else return false;
}

}

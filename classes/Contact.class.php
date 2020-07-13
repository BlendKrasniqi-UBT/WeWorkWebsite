<?php

class Contact {
  public $name;
  public $email;
  public $city;
  public $placeofwork;
  public $gender;
  public $entertext;

  public $connection;
  public $sql;
  public $query;


  public function __construct($name, $email, $city, $placeofwork, $gender, $entertext){
    $this->name = $name;
    $this->email = $email;
    $this->city = $city;
    $this->placeofwork = $placeofwork;
    $this->gender = $gender;
    $this->entertext = $entertext;
  }

  public function doContact(){

    $this->connection = new DBConnection();

      $this->sql = 'INSERT INTO contact (name, email, city, placeofwork, gender, entertext) VALUES (:name, :email, :city, :placeofwork, :gender, :entertext)';
      $this->query = $this->connection->getConnection()->prepare($this->sql);
      $this->query->bindParam('name', $this->name);
      $this->query->bindParam('email', $this->email);
      $this->query->bindParam('city', $this->city);
      $this->query->bindParam('placeofwork', $this->placeofwork);
      $this->query->bindParam('gender', $this->gender);
      $this->query->bindParam('entertext', $this->entertext);

      if($this->query->execute()) {
          header("Location: ../contact.php?submit=success");
      } else {
          hheader("Location: ../contact.php?submit=failed");
      }

  }
}

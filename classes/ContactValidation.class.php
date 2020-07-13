<?php

class ContactValidation {
  public $nameErr;
  public $emailErr;
  public $cityErr;
  public $placeofworkErr;
  public $genderErr;
  public $entertextErr;
  public $showError;
  public $nameCheck;
  public $emailCheck;
  public $passwordCheck;
  public $errorCount;

  public function doContactValidation() {
    $this->nameErr = "";
    $this->emailError = "";
    $this->cityErr = "";
    $this->placeofworkErr ="";
    $this->genderErr ="";
    $this->entertextErr ="";

    $this->nameCheck = test_input($_POST["name"]);
    $this->emailCheck = test_input($_POST["email"]);

    if (empty($_POST['name'])) {
        $this->nameErr = "Name is required<br>";
        header("Location: ../contact.php?name=empty");
        $this->errorCount++;
    }
    else if (!preg_match("/^[a-zA-Z]{2,}$/",$this->nameCheck)) {
      $this->nameErr = "Name: Only letters allowed. Must be more than 2 characters.<br>";
      header("Location: ../contact.php?name=invalid");
      $this->errorCount++;
    }

    if (empty($_POST['email'])) {
      $this->emailErr = "Email is required<br>";
      header("Location: ../contact.php?email=empty");
      $this->errorCount++;
    }
    else if (!preg_match("/^.+@.+..+$/",$this->emailCheck)) {
      $this->emailErr = "Please write a valid email.<br>";
      header("Location: ../contact.php?email=invalid");
      $this->errorCount++;
    }

    if (empty($_POST['city'])) {
        $this->cityErr = "City is required<br>";
        header("Location: ../contact.php?city=empty");
        $this->errorCount++;
    }

    if (empty($_POST['placeofwork'])) {
        $this->placeofworkErr = "Place of work is required<br>";
        header("Location: ../contact.php?placeofwork=empty");
        $this->errorCount++;
    }

    if (empty($_POST['gender'])) {
        $this->genderErr = "Gender is required<br>";
        header("Location: ../contact.php?gender=empty");
        $this->errorCount++;
    }

    if (empty($_POST['entertext'])) {
        $this->entertextErr = "Textarea is required<br>";
        header("Location: ../contact.php?textarea=empty");
        $this->errorCount++;
    }

    $this->showError = $this->nameErr . $this->emailErr . $this->cityErr . $this->placeofworkErr . $this->genderErr . $this->entertextErr;

    if ($this->errorCount > 0){
    return true;
    }
    else return false;

}
}

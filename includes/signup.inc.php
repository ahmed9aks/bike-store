<?php
  if(isset($_POST["submit"])){
    $username= $_POST["uid"];
    $email= $_POST["email"];
    $password= $_POST["password"];
    $passwordRepeat= $_POST["cpassword"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($username, $email, $password, $passwordRepeat)!== false){
        header("location:../signup.php?error=emptyinput");
        exit();
    }
    if(invalidUid($username)!== false){
        header("location:../signup.php?error=invaliduid");
        exit(); 
    }
    if(invalidEmail($email)!== false){
        header("location:../signup.php?error=invalidemail");
        exit(); 
    }
    if(passwordMatch($password, $passwordRepeat)!== false){
        header("location:../signup.php?error=passwordsdontmatch");
        exit(); 
    }
    if(uidExists($conn, $username, $email)!==false){
        header("location:../signup.php?error=usernameoremailtaken");
        exit();
    }
    createUser($conn, $email, $password);
  }else{
    header("location:../signup.php");
    exit();
  }
<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
  
  $username = htmlspecialchars($_POST["username"]);
  $password = htmlspecialchars($_POST["password"]);

  if(empty($username)) {
    header("Location: ../index.php");
    exit();
  }
  if(empty($password)) {
    header("Location: ../index.php");
    exit();
  }


} else {
  header("Location: ../index.php");
}
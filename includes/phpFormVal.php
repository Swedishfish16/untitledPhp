<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
  echo "Hello World";
} else {
  header("Location: ../index.php");
}
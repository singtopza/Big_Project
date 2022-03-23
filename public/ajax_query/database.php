<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "usr6242590_ivan";
  $connect = mysqli_connect($host,$username,$password,$database) or die ("ERROR CANT NOT FIND DATABASE kunkaibookshop");
  mysqli_set_charset($connect, "utf8mb4");
  date_default_timezone_set('Asia/Bangkok');
?>
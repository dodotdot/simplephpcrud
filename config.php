<?php

// connect to db
$con = mysqli_connect("localhost", "root", "2345","dbtest");


// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>

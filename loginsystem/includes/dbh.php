<?php

  $db = 'loginsystem';
  $username = "root";
  $password = "mysql";
  $host = 'localhost';
  $conn = mysqli_connect($host, $username, $password, $db);
  if (!conn) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  return $conn;
 ?>

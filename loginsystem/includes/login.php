<?php
if (isset($_POST['login'])) {
    require 'dbh.php';

    $mailuid  = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
      header("Location: ../index.php")
    }
}
else {
  header("Location: ../index.php");
  exit();
}
 ?>

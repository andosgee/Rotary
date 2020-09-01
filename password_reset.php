<?php
include "inc/depends.php";
session_start();
AccessForbid();
AdminOptions();
$conn = OpenCon();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> <!--Font stylesheet-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Reset | Rotary Belfast</title>
  </head>
  <body>
    <div class="pwdAdmin__bckgro">
    <?php include "inc/header.php"; ?>

    <?php include "inc/nav.php"; ?>

    <?php include "inc/pwd_reset_admin.php"; ?>
  </div>
  </body>
</html>

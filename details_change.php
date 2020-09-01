<?php
include "inc/depends.php";
session_start();
AccessForbid();
$conn = OpenCon();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> <!--Font stylesheet-->
    <title>Change Details | Rotary Belfast</title>
  </head>
  <body>

    <div class="cgnDet__bckgro">
    <?php include "inc/header.php"; ?>

    <?php include "inc/nav.php"; ?>

    <?php include "inc/details.php"; ?>
  </div>
  </body>
</html>

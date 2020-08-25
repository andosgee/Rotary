<?php
include "inc/depends.php";
session_start();
AccessForbid();
$conn = OpenCon();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password | Rotary Belfast</title>
  </head>
  <body>
    <?php include "inc/nav.php"; ?>
  <div class="pwd_change">
    <?php include "inc/pwd_change.php"; ?>
  </div>
  </body>
</html>

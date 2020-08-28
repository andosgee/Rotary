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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Remove Member | Rotary Belfast</title>
  </head>
  <body>
    <?php include "inc/nav.php"; ?>
  <div class="remove_member">
    <?php include "inc/remove_member.php"?>
  </div>
  </body>
</html>

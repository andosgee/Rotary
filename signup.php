<?php
include "inc/depends.php";
$conn = OpenCon();
session_start();

SessionExist();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Signup | Rotary Belfast</title>
</head>
<body>
  <?php include "inc/header.php"; ?>

  <?php include "inc/nav.php"; ?>

  <?php include "inc/signup-content.php";?>

</body>
</html>

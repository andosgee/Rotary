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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Signup | Rotary Belfast</title>
</head>
<body>
  <?php include "inc/nav.php"; ?>

  <?php include "inc/signup-content.php";?>

</body>
</html>

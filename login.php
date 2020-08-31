<?php
session_start();
include "inc/depends.php";  #Adds Functions Files
$conn = OpenCon();

SessionExist();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Login | Rotary Belfast</title>
</head>
<body>
  <?php include "inc/nav.php"; ?>
  <script>
  function myFunction() {
    var x = document.getElementsByClassName("nav__items")[0];
    if (x.style.display === "block") {
        x.style.display = "none";
      } else {
          x.style.display = "block";
        }
      }
  </script>
  <?php include "inc/signin-content.php"; ?>

</body>
</html>

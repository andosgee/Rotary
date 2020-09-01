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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Login | Rotary Belfast</title>
</head>
<body>
  <?php include "inc/nav.php"; ?>
  <script>
  function mobileMenu() {
    var x = document.getElementsByClassName("nav__items")[0];
    if (x.style.display === "block") {
      $('.nav__items').slideToggle('600');
        x.style.display = "none";
      } else {
          $('.nav__items').slideToggle('600');
          x.style.display = "block";
        }
      }
  </script>
  <?php include "inc/signin-content.php"; ?>

</body>
</html>

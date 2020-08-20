<?php
session_start();

if(!empty($_SESSION['ID'])){
  header("location index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login | Rotary Belfast</title>
</head>
<body>
  <?php include "inc/nav.php"; ?>

  <?php include "inc/signin-content.php"; ?>

</body>
</html>

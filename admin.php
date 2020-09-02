<<<<<<< HEAD
<?php
include "inc/depends.php";
session_start();
AccessForbid();
$conn = OpenCon();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> <!--Font stylesheet-->
  <title>Manage Account | Rotary Belfast</title>
</head>
<body>
  <?php include "inc/header.php"; ?>

  <?php include "inc/nav.php"; ?>
=======
<!DOCTYPE html>
<html lang="en">
<?php include "./inc/head.php"; ?>
<?php AdminOnlyAccess();?>
<body>
  <?php include './inc/title.php'; ?>
  <?php include "./inc/nav.php"; ?>
  <?php include './inc/footer.php'; ?>
>>>>>>> master

  <?php include "inc/admin_content.php"; ?>

  <?php AdminIs();?>

</body>
</html>

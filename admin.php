<!DOCTYPE html>
<html lang="en">
<?php include "./inc/head.php"; ?>
<?php AdminOnlyAccess();?>
<body>
  <?php include './inc/title.php'; ?>
  <?php include "./inc/nav.php"; ?>
  <?php include './inc/footer.php'; ?>

  <?php include "inc/admin_content.php"; ?>

  <?php AdminIs();?>

</body>
</html>

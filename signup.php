<!DOCTYPE html>
<html lang="en">
<?php include "./inc/head.php";
GuestOnly();
?>
<body>
  <?php include './inc/title.php'; ?>
  <?php include "inc/nav.php"; ?>
  <div class="row">
    <?php //include './inc/sidebar.php'; ?> <!-- Only on desktop -->
    <?php include "./inc/signup_validation.php";?>
  </div>
</body>

<?php include "./inc/footer.php"; ?>
</html>

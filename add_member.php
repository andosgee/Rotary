<!DOCTYPE html>
<html lang="en">
<?php include "inc/head.php";
      AdminOnlyAccess();?>
<body>

  <?php include "inc/title.php"; ?>

  <?php include "inc/nav.php"; ?>

  <?php include "inc/add_mem_script.php";?>


  <!-- Form to add a user -->
  <form method="POST" name="add_member_form" class="form column">
    <div class="column form__head">
      <h1 class="form__title">Add New Member</h1>

      <p>Please Enter Details Below</p>
    </div>

    <!-- Destination for async request content -->
    <div class="form__content">
      <?php include_once "./inc/add_member.php"; ?>
    </div>
  </form>
</body>
  <?php include "inc/footer.php"; ?>
</html>

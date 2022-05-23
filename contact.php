<!DOCTYPE html>
<html lang="en">
<?php include "./inc/head.php"; ?>
<script src="./js/pdf_update.js" charset="utf-8"></script>
<body>
  <?php include './inc/title.php'; ?>
  <?php include "./inc/nav.php"; ?>
  <div class="row">
    <div class="column sidebar-d">
          <?php include './inc/sidebar.php'; ?>
        </div>
    <div class="column">
      <?php include "./inc/contact_content.php"; ?>

      <?php include './inc/pdf_display.php';?>
    </div>

  </div>

  <?php include './inc/footer.php'; ?>
</body>
</html>

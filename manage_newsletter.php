<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "inc/head.php";
      AdminOnlyAccess();?>
<body>
  <?php include "inc/title.php"; ?>

  <?php include "inc/nav.php"; ?>

  <div class="cards column">
    <div class="admin-card column" onclick="location.href='create_newsletters';">
      <h2 class="admin-card__heading">Update Newsletter</h2>
      <img alt="person" src="media/admin_portal/default/Newsletter.png" class="admin-card__image">
      <br>
    </div>

    <div class="admin-card column" onclick="location.href='delete_newsletters';">
      <h2 class="admin-card__heading">Delete Newsletter</h2>
      <img alt="person" src="media/admin_portal/default/Newsletter.png" class="admin-card__image">
      <br>
    </div>


    <div class="admin-card column" onclick="location.href='newsletters';">
      <h2 class="admin-card__heading">View Current Newsletter</h2>
      <img alt="person" src="media/admin_portal/default/Newsletter.png" class="admin-card__image">
      <br>
    </div>
  </div>

</body>

<?php include "./inc/footer.php"; ?>
</html>

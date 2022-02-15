<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "inc/head.php";
      UserOnlyAccess();?>
<body>
  <?php include "inc/title.php"; ?>

  <?php include "inc/nav.php"; ?>

  <div class="cards column">
    <div class="admin-card column" onclick="location.href='upload_images_to_gallery';">
      <h2 class="admin-card__heading">Add Images</h2>
      <img alt="person" src="media/admin_portal/default/camera.png" class="admin-card__image">
    </div>

    <?php if($_SESSION['ISADMIN']){?>
      <div class="admin-card column" onclick="location.href='manage_images';">
        <h2 class="admin-card__heading">Delete Images</h2>
        <img alt="person" src="media/icons/trash.png" class="admin-card__image">

      </div>
    <?php } ?>
    <div class="admin-card column" onclick="location.href='Photos';">
      <h2 class="admin-card__heading">View Gallery</h2>
      <img alt="person" src="media/admin_portal/default/gallery.png" class="admin-card__image">
    </div>
  </div>

</body>

<?php include "./inc/footer.php"; ?>
</html>

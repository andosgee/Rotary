<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "inc/head.php";
      UserOnlyAccess();?>
<body>
  <?php include "inc/title.php"; ?>

  <?php include "inc/nav.php"; ?>

  <div class="cards column">
    <div class="admin-card column" onclick="location.href='upload_images_to_gallery.php';">
      <h2 class="admin-card__heading">Add Images</h2>
      <img alt="person" src="media/admin_portal/default/article.png" class="admin-card__image">
      <br>
      Add Images to the Gallery Here.
    </div>

    <?php if($_SESSION['ISADMIN']){?>
      <div class="admin-card column" onclick="location.href='manage_images.php';">
        <h2 class="admin-card__heading">Manage Images</h2>
        <img alt="person" src="media/admin_portal/default/article.png" class="admin-card__image">
        <br>
        Click here to publish and archive images.
      </div>
    <?php } ?>
    <div class="admin-card column" onclick="location.href='Photos.php';">
      <h2 class="admin-card__heading">View Gallery</h2>
      <img alt="person" src="media/admin_portal/default/article.png" class="admin-card__image">
      <br>
      View all published images here.
    </div>
  </div>

</body>

<?php include "./inc/footer.php"; ?>
</html>

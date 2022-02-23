<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "inc/head.php";
      UserOnlyAccess();?>
<body>
  <?php include "inc/title.php"; ?>

  <?php include "inc/nav.php"; ?>

  <div class="cards column">
    <div class="admin-card column" onclick="location.href='create_article';">
      <h2 class="admin-card__heading">New Article</h2>
      <img alt="person" src="media/admin_portal/default/article.png" class="admin-card__image">
      <br>
      Create a new article here.
    </div>

    <?php if($_SESSION['ISADMIN']){?>
      <div class="admin-card column" onclick="location.href='moderate_article';">
        <h2 class="admin-card__heading">Moderate/Edit/Delete Articles</h2>
        <img alt="person" src="media/admin_portal/default/article.png" class="admin-card__image">
        <br>
        Click here to verify and publish pending articles.
      </div>
    <?php } ?>
    <div class="admin-card column" onclick="location.href='articles';">
      <h2 class="admin-card__heading">View Articles</h2>
      <img alt="person" src="media/admin_portal/default/article.png" class="admin-card__image">
      <br>
      View all published articles here.
    </div>
  </div>

</body>

<?php include "./inc/footer.php"; ?>
</html>

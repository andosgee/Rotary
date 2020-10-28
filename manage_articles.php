<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "inc/head.php";
      UserOnlyAccess();?>
<body>
  <?php include "inc/title.php"; ?>

  <?php include "inc/nav.php"; ?>

  <div class="cards column">
    <div class="admin-card column" onclick="location.href='create_article.php';">
      <h2 class="admin-card__heading">New Article</h2>
      <img alt="person" src="media/members/add_member.png" class="admin-card__image">
      <br>
    </div>

    <?php if($_SESSION['ISADMIN']){?>
      <div class="admin-card column" onclick="location.href='moderate_article.php';">
        <h2 class="admin-card__heading">Moderate Articles</h2>
        <img alt="person" src="media/members/edit_member.png" class="admin-card__image">
        <br>
        Click here to verify and publish pending articles
      </div>
    <?php } ?>
    <div class="admin-card column" onclick="location.href='articles.php';">
      <h2 class="admin-card__heading">View Articles</h2>
      <img alt="person" src="media/members/edit_member.png" class="admin-card__image">
      <br>
    </div>
  </div>

</body>

<?php include "./inc/footer.php"; ?>
</html>

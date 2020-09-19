<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "inc/head.php";
      UserOnlyAccess();?>
<body>
  <?php include "inc/title.php"; ?>

  <?php include "inc/nav.php"; ?>

  <div class="cards column">
    <div class="card column" onclick="location.href='create_article.php';">
      <h2 class="card__heading">New Article</h2>
      <img alt="person" src="media/members/add_member.png" class="card__image">
      <br>
    </div>

    <?php if($_SESSION['ISADMIN']){?>
      <div class="card column" onclick="location.href='mod_article.php';">
        <h2 class="card__heading">Moderate Articles</h2>
        <img alt="person" src="media/members/edit_member.png" class="card__image">
        <br>
        Click here to verify and publish pending articles
      </div>
    <?php } ?>
    <div class="card column" onclick="location.href='articles.php';">
      <h2 class="card__heading">View Articles</h2>
      <img alt="person" src="media/members/edit_member.png" class="card__image">
      <br>
    </div>
  </div>

</body>

<?php include "./inc/footer.php"; ?>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "inc/head.php";
      AdminOnlyAccess();?>
<body>
  <?php include "inc/title.php"; ?>

  <?php include "inc/nav.php"; ?>

  <div class="cards column">
    <div class="card column" onclick="location.href='create_newsletter.php';">
      <h2 class="card__heading">Update Newsletter</h2>
      <img alt="person" src="media/members/add_member.png" class="card__image">
      <br>
    </div>

    <div class="card column" onclick="location.href='newsletter.php';">
      <h2 class="card__heading">View Current Newsletter</h2>
      <img alt="person" src="media/members/edit_member.png" class="card__image">
      <br>
    </div>
  </div>

</body>

<?php include "./inc/footer.php"; ?>
</html>

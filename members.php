<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "inc/head.php";
      AdminOnlyAccess();?>
<body>
  <?php include "inc/title.php"; ?>

  <?php include "inc/nav.php"; ?>

  <div class="cards column">
    <div class="admin-card column" onclick="location.href='view_members.php';">
      <h2 class="admin-card__heading">View Club Members</h2>
      <img alt="person" src="media/members/add_member.png" class="admin-card__image">
      <br>
      Click Here to view club members.
    </div>

    <div class="admin-card column" onclick="location.href='add_member.php';">
      <h2 class="admin-card__heading">Add User</h2>
      <img alt="person" src="media/members/add_member.png" class="admin-card__image">
      <br>
      Click Here to add a User.
    </div>

    <div class="admin-card column" onclick="location.href='manage_members.php';">
      <h2 class="admin-card__heading">Manage Users</h2>
      <img alt="person" src="media/members/edit_member.png" class="admin-card__image">
      <br>
      Click Here manage users.
    </div>
  </div>

</body>

<?php include "./inc/footer.php"; ?>
</html>

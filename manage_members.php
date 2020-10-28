<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include "inc/head.php";
      AdminOnlyAccess();?>
  <body>

    <?php include "inc/title.php"; ?>

    <?php include "inc/nav.php"; ?>

    <?php include "inc/manage_user_script.php";?>


    <script src="js/get_details.js"></script>

    <form method="POST" name="manage_members" class="form column">
      <div class="column form__head">
        <h1 class="form__title">Manage Users</h1>
        <div class="row">
          <label class="form__label" for="user_select">Select Member:</label>
          <select name="user_select" class="form__select" onchange="populateFormByID(this.value,'./inc/manage_form.php')">
            <option value="" selected>-</option>
            <?php
              $users = get_from_table('tbl_login');

              foreach($users as $user){
                echo "<option value=\"{$user['ID']}\">{$user['NameF']} {$user['NameS']}</option>";
              } ?>
          </select>
        </div>
      </div>
      <hr class="solid">

      <div class="form__content column">
        <?php include "./inc/manage_form.php" ?>
      </div>
    </form>
  </body>

<?php include "./inc/footer.php"; ?>
</html>

<!DOCTYPE html>
<html lang="en">
<?php include "inc/head.php";
      AdminOnlyAccess();?>
<body>

  <?php include "inc/title.php"; ?>

  <?php include "inc/nav.php"; ?>

  <?php include "inc/add_mem_script.php";?>

  <script src="js/get_details.js"></script>

  <!-- Form to add a user -->
  <form method="POST" name="add_member_form" class="form column">
    <div class="column form__head">
      <h1 class="form__title">Add User</h1>
      <div class="row">
        <label class="form__label" for="user_select">Select Application:</label>
        <select name="user_select" class="form__select" onchange="populateFormByID(this.value,'./inc/add_member.php')">
          <option value="0" selected>-</option>
          <?php
            $interested = get_from_table('tbl_interest');

            foreach($interested as $person){
              echo "<option value=\"{$person['ID']}\">{$person['NameF']} {$person['NameS']}</option>";
            } ?>
        </select>
      </div>
      <p>Or enter details manually</p>
    </div>

    <!-- Destination for async request content -->
    <div class="form__content">
      <?php include_once "./inc/add_member.php"; ?>
    </div>
  </form>
</body>
  <?php include "inc/footer.php"; ?>
</html>

<?php include "inc/remove_user_script.php";?>

  <form name="remove_member" method="post" class="form column">
    <div class="row">
      <label for="user_select">Select Member:</label>
      <select name="user_select" class="form__select">
        <?php DisplayUsersAsOption() ?>
      </select>
    </div>

    <div class="row">
      <label for="remove_member_chk">Confirm:</label>
      <input type="checkbox" name="remove_member_chk" class="form__checkbox" required>
    </div>

    <button type="submit" name="remove_member_btn" class="form__button--delete">Remove User</button>
  </form>

<?php include "inc/remove_user_script.php";?>
<div class="remUser">
  Remove a user.
  <p />

  <form name="remove_member" method="post" class="remUser__form">
    <div class="row">
      <div class="column">
        <label for="user_select">Select Member:</label>
        <br>
        <label for="remove_member_chk">Confirm:</label>
      </div>
      <div class="column">
        <?php PopUsersSelect(); ?>
        <br>
        <input type="checkbox" name="remove_member_chk" class="remUser__chk" required>
      </div>
    </div>
  <button type="submit" name="remove_member_btn" class="remUser__btn">Remove User</button>
  </form>
</div>

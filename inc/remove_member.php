<?php include "inc/remove_user_script.php";?>
Remove a user.

<form name="remove_member" method="post">
  <div class="row">
    <div class="column">
      <label for="user_select">Select Member:</label>
      <br>
      <label for="remove_member_chk">Confirm:</label>
    </div>
    <div class="column">
      <?php PopUsersSelect(); ?>
      <br>
      <input type="checkbox" name="remove_member_chk" id="remove_member_chk" required>
    </div>
  </div>
<button type="submit" name="remove_member_btn" id="remove_member_btn">Remove User</button>
</form>

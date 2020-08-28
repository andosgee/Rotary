<?php include "inc/pwd_reset_script.php";?>
If a user has forgotten their password, reset it here.
<br>
<from name="admin_pwd_reset" method="post">
  <div class="row">
    <div class="column">
      <label for="user_select">User:</label>
      <br>
      <label for="admin_pwd_reset_confirm">Confirm Password Change:</label>
    </div>
    <div class="column">
      <?php PopUsersSelect(); ?>
      <br>
      <input type="checkbox" name="admin_pwd_reset_confirm" id="admin_pwd_reset_confirm" required>
    </div>
  </div>
  <div class="row">
    <button type="submit" name="admin_pwd_reset_btn">Reset Password</button>
  </div>
</form>

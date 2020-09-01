<?php include "inc/pwd_reset_script.php";?>
<div class="pwdResetAdmin">

If a user has forgotten their password, reset it here.
<p />

<from name="admin_pwd_reset" method="post" class="pwdAdmin__form">
  <div class="row">
    <div class="column">
      <label for="user_select">User:</label>
      <br>
      <label for="admin_pwd_reset_confirm">Confirm Password Change:</label>
    </div>
    <div class="column">
      <?php PopUsersSelect(); ?>
      <br>
      <input type="checkbox" name="admin_pwd_reset_confirm" class="pwdAdmin__chk" required>
    </div>
  </div>

    <button type="submit" name="admin_pwd_reset_btn" class="pwdAdmin__btn">Reset Password</button>

</form>

</div>

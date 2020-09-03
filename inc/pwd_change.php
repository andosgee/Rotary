<?php include "inc/pwd_reset_script.php";?>
  <form name="pwd_change" class="form column" method="post">
      <div class="row">
        <label for="pwd_change_pwd">New Password:</label>
        <input type="password" name="pwd_change_pwd" class="form__input" placeholder="New Password" required>
      </div>

      <div class="row">
        <label for="pwd_change_pwd_ver">Re-enter New Password:</label>
        <input type="password" name="pwd_change_pwd_ver" class="form__input" placeholder="Re-enter New Password" required>
      </div>

      <div class="row">
        <label for="pwd_change_con">Confirm:</label>
        <input type="checkbox" name="pwd_change_con" class="form__checkbox" required>
      </div>
      <button type="submit" name="pwd_change_btn" class="form__button">Change Password</button>


    <?php echo $err_pwd;?>
  </form>

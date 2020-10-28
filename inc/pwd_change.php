<?php include "inc/pwd_script.php";?>

  <form name="pwd_change" class="form column" method="post">
    <?php echo $suc_pwd; ?>
    <label for="pwd_change_pwd">New Password:</label>
      <div class="row">
        <input type="password" name="pwd_change_pwd" class="form__input" placeholder="New Password" required>
      </div>

      <label for="pwd_change_pwd_ver">Re-enter New Password:</label>
      <div class="row">
        <input type="password" name="pwd_change_pwd_ver" class="form__input" placeholder="Re-enter New Password" required>
      </div>

      <div class="row">
        <label for="pwd_change_con">Confirm:</label>
        <input type="checkbox" name="pwd_change_con" class="form__checkbox" required>
      </div>
      <button type="submit" name="pwd_change_btn" class="form__button form__button--delete">Change Password</button>


    <?php echo $err_pwd;?>
  </form>

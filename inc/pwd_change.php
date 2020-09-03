<div class="pwdCgn">
<?php include "inc/pwd_reset_script.php";?>
User Can reset password here.
<br>
  <form name="pwd_change" class="form" method="post">
    <div class="row">
      <div class="column">
        <label for="pwd_change_pwd">New Password:</label>
        <br>
        <label for="pwd_change_pwd_ver">Re-enter New Password:</label>
        <br>
        <label for="pwd_change_con">Confirm this Change:</label>
      </div>

      <div class="column">
        <input type="password" name="pwd_change_pwd" class="form__input" placeholder="New Password" required>
        <br>
        <input type="password" name="pwd_change_pwd_ver" class="form__input" placeholder="Re-enter New Password" required>
        <br>
        <input type="checkbox" name="pwd_change_con" class="form__checkbox" required>
      </div>
    </div>

    <div class="row">
      <button type="submit" name="pwd_change_btn" class="form__button">Change Password</button>
    </div>
    <?php echo $err_pwd;?>
  </form>
</div>

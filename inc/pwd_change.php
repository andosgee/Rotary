<?php include "inc/pwd_reset_script.php";?>
User Can reset password here.
<br>
  <form name="pwd_change" id="pwd_change" method="post">
    <div class="row">
      <div class="column">
        <label for="pwd_change_pwd">New Password:</label>
        <br>
        <label for="pwd_change_pwd_ver">Re-enter New Password:</label>
        <br>
        <label for="pwd_change_con">Confirm this Change:</label>
      </div>

      <div class="column">
        <input type="password" name="pwd_change_pwd" id="pwd_change_pwd" placeholder="New Password" required>
        <br>
        <input type="password" name="pwd_change_pwd_ver" id="pwd_change_pwd_ver" placeholder="Re-enter New Password" required>
        <br>
        <input type="checkbox" name="pwd_change_con" id="pwd_change_con" required>
      </div>
    </div>

    <div class="row">
      <button type="submit" name="pwd_change_btn" id="pwd_change_btn">Change Password</button>
    </div>
    <?php echo $err_pwd;?>
  </form>

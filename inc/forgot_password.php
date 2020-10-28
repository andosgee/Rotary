<?php include "inc/pwd_script.php";?>

  <form name="pwd_reset" class="form column" method="post">
    <div class="column form__head">
      <h1 class="form__title">Manage Users</h1>
    </div>

    <?php echo $suc_pwd; ?>
  <div class="row">
    <?php echo $err_pwd; ?>
  </div>
    <label for="pwd_reset_user">Username:</label>
      <div class="row">
        <input name="pwd_reset_user" class="form__input" placeholder="Username" required>
      </div>
      <label for="pwd_reset_email">Email:</label>
        <div class="row">
          <input type="email" name="pwd_reset_email" class="form__input" placeholder="Email" required>
        </div>
        <label for="pwd_reset_phone">Phone Number:</label>
          <div class="row">
            <input type="tel" name="pwd_reset_phone" class="form__input" placeholder="Phone Number" required>
          </div>
    <label for="pwd_reset_pwd">New Password:</label>
      <div class="row">
        <input type="password" name="pwd_reset_pwd" class="form__input" placeholder="New Password" required>
      </div>

      <label for="pwd_reset_pwd_ver">Re-enter New Password:</label>
      <div class="row">
        <input type="password" name="pwd_reset_pwd_ver" class="form__input" placeholder="Re-enter New Password" required>
      </div>

      <div class="row">
        <label for="pwd_change_con">Confirm:</label>
        <input type="checkbox" name="pwd_reset_con" class="form__checkbox" required>
      </div>
      <button type="submit" name="pwd_reset_btn" class="form__button form__button--delete">Reset Password</button>



  </form>

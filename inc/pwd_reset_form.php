<?php include "inc/pwd_reset_script.php";?>

<form name="pwd_reset" method="POST" class="form column">
  <h2 class="form__title">Reset Password</h2>
  <div class="row">
    <label for="pwd_reset_input" class="form__label">Username or Email:</label>
    <input name="pwd_reset_input" class="form__input" placeholder="Username or Email" required>
  </div>
  <button type="submit" name="pwd_reset_btn" class="form__button">Reset Password</button>
</form>

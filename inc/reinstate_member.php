<?php include "inc/reinstate_user_script.php";?>

  <form name="reinstate_member" method="post" class="form column">
    <div class="row">
      <label for="user_select">Select Member:</label>

      <select name="user_select" class="form__select">
        <option value="">-</option>
        <?php
          $users = get_from_table('tbl_login','Active = 0');

          foreach($users as $user){
            echo "<option value=\"{$user['ID']}\">{$user['NameF']} {$user['NameS']}</option>";
          } ?>
      </select>
    </div>

    <div class="row">
      <label for="reinstate_member_chk">Confirm:</label>
      <input type="checkbox" name="reinstate_member_chk" class="form__checkbox" required>
    </div>

    <button type="submit" name="reinstate_member_btn" class="form__button form__button--submit">Reinstate User</button>
  </form>

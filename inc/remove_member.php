<?php include "inc/remove_user_script.php";?>

  <form name="remove_member" method="post" class="form column">
    <div class="row">
      <label for="user_select">Select Member:</label>

      <select name="user_select" class="form__select">
        <option value="">-</option>
        <?php
          $users = get_from_table('tbl_login','Active = 1');

          foreach($users as $user){
            echo "<option value=\"{$user['ID']}\">{$user['NameF']} {$user['NameS']}</option>";
          } ?>
      </select>
    </div>

    <div class="row">
      <label for="remove_member_chk">Confirm:</label>
      <input type="checkbox" name="remove_member_chk" class="form__checkbox" required>
    </div>

    <button type="submit" name="remove_member_btn" class="form__button form__button--delete">Remove User</button>
  </form>

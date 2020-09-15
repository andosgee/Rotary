<?php include "inc/manage_user_script.php";
?>
<script src="js/get_details.js"></script>
<?php include  "inc/getuser.php"?>

<span id="userID"></span>
<form method="POST" name="manage_members" class="form" id="manageUser">
  <div class="row">
    <label for="user_select">Select Member:</label>
    <select name="user_select" class="form__select" id="hi">
      <option value="0">-</option>
      <?php
        $users = get_from_table('tbl_login');

        foreach($users as $user){
          echo "<option value=\"{$user['ID']}\">{$user['NameF']} {$user['NameS']}</option>";
        } ?>
    </select>
  </div>
  <div class="row">
    <label for="reinstate_member_chk">Reinstate Member:</label>
    <input type="checkbox" name="reinstate_member_chk" class="form__checkbox">
  </div>

  <div class="row">
    <label for="make_admin_user">Make Admin:</label>
    <input type="checkbox" name="make_admin_user" class="form__checkbox">
  </div>

  <div class="row">
    <label for="remove_admin_user">Remove Admin:</label>
    <input type="checkbox" name="remove_admin_user" class="form__checkbox">
  </div>

  <div class="row">
    <label for="confirm_change">Confirm:</label>
    <input type="checkbox" name="confirm_change" class="form__checkbox" required>
  </div>
  <button type="submit" name="delete_user" class="form__button form__button--delete">Delete User</button>
  <button type="submit" name="update_user" class="form__button form__button--submit">Update User</button>
</form>

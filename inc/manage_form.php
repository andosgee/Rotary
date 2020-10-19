<?php
  if(isset($_GET['id']) && !empty($_GET['id'])){
    //Refresh connection and functions for async request
    include "../inc/depends.php";
    $conn = OpenCon();
    $id = secure($_GET['id']);
    $user = get_from_table('tbl_login',"ID={$id}")[0];?>

    <div class="form__info column">
      <label class="form__label"><b>Name:</b> <?php echo "{$user['NameF']} {$user['NameS']}"?></label>
      <label class="form__label"><b>Username:</b> <?php echo $user['UserName'] ?></label>
      <label class="form__label"><b>Email:</b> <?php echo $user['Email'] ?></label>
      <label class="form__label"><b>Mobile:</b> <?php echo $user['Mobile'] ?></label>
    </div>

    <div class="column">
      <div class="row">
        <label class="form__label" for="active_status">Active:</label>
        <input type="checkbox" name="active_status" class="form__checkbox" <?php echo (($user['Active'])? "checked":"")?>>
      </div>

      <div class="row">
        <label class="form__label" for="admin_status">Admin:</label>
        <input type="checkbox" name="admin_status" class="form__checkbox" <?php echo (($user['Admin'])? "checked":"")?>>
      </div>
    </div>

    <div class="form__buttons row">
      <button type="submit" name="delete_user" class="form__button form__button--delete">Delete User</button>
      <button type="submit" name="update_user" class="form__button form__button--submit">Update User</button>
    </div>
<?php } ?>

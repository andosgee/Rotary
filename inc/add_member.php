<?php include "inc/add_mem_script.php";
include "inc/loaduserNew.php";
?>
<script src="js/get_details.js"></script>

<!-- Form to add a user -->


<form method="POST" name="add_member_form" class="form column">
  <h2>Add New Member</h2>
  <div class="row">
    <h3>Select From List or Enter Details Manually</h3>
  </div>
  <div class="row">
    <label for="user_select">Select Member:</label>
    <select name="user_select" class="form__select" onchange="loadInfoNew(this.value)">
      <option value="0">-</option>
      <?php
        $users = get_from_table('tbl_interest');

        foreach($users as $user){
          echo "<option value=\"{$user['ID']}\">{$user['fName']} {$user['Surname']}</option>";
        } ?>
    </select>

  </div>
  <div class="row">
  <?php include  "inc/getuser.php"?>
</div>
  <label for="add_mem_name" class="form__label">Name</label>
  <div class="row">
    <input name="add_mem_name_f" class="form__input" placeholder="First Name" value="<?php echo $fName;?>"required>
    <input name="add_mem_name_s" class="form__input" placeholder="Surname" required>
  </div>

  <label for="add_mem_email" class="form__label">Email</label>
  <div class="row">
    <input type="email" name="add_mem_email" class="form__input" placeholder="sample@sample.com" required>
  </div>

  <label for="add_mem_phone" class="form__label">Phone Number</label>
  <div class="row">
    <input type="tel" name="add_mem_phone" class="form__input" placeholder="123456789" required>
  </div>

  <label for="add_mem_username" class="form__label">Username</label>
  <div class="row">
    <input name="add_mem_username" class="form__input" placeholder="Username" required>
  </div>

  <label for="add_mem_address" class="form__label">Address</label>

    <div class="row">
      <input name="add_mem_add_num" class="form__input" placeholder="Street Number">
      <input name="add_mem_add_unit" class="form__input" placeholder="Unit">
    </div>
    <div class="row">
      <input name="add_mem_add_streName" class="form__input" placeholder="Street Name">
    </div>

    <div class="row">
      <input name="add_mem_add_city" class="form__input" placeholder="City">
    </div>
    <div class="row">
      <input name="add_mem_add_sub" class="form__input" placeholder="Suburb">
      <input type="number" name="add_mem_add_postcode" class="form__input" placeholder="Post Code">
    </div>

    <div class="row">
      <label for="add_mem_admin" class="form__label">Admin:</label>
      <input type="checkbox" name="add_mem_admin" class="form__checkbox" value="1" >
    </div>

  <button name="add_mem_sub" type="submit" class="form__button form__button--submit">Add User</button>
</form>

<?php include "inc/new_user_info.php"; ?>

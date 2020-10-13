<?php
if(isset($_GET['id'])){
  //Refresh connection and functions for async request
  include "../inc/depends.php";
  $conn = OpenCon();
  $id = secure($_GET['id']);
  $user = get_from_table('tbl_interest',"ID={$id}");
  if($user){
    $user = $user[0];
  }
 } ?>



<label for="add_mem_name" class="form__label">Name</label>
<div class="row">
  <input name="add_mem_name_f" class="form__input" placeholder="First Name" value = "<?php echo ((isset($user['NameF']))? $user['NameF']:''); ?>" required>

  <input name="add_mem_name_s" class="form__input" placeholder="Last Name" value = "<?php echo ((isset($user['NameS']))? $user['NameS']:''); ?>" required>
</div>

<label for="add_mem_email" class="form__label">Email</label>
<div class="row">
  <input type="email" name="add_mem_email" class="form__input" placeholder="sample@sample.com" value = "<?php echo ((isset($user['Email']))? $user['Email']:''); ?>" required>
</div>

<label for="add_mem_phone" class="form__label">Phone Number</label>
<div class="row">
  <input type="tel" name="add_mem_phone" class="form__input" placeholder="123456789" value = "<?php echo ((isset($user['Mobile']))? $user['Mobile']:''); ?>" required>
</div>

<label for="add_mem_username" class="form__label">Username</label>
<div class="row">
  <input name="add_mem_username" class="form__input" placeholder="Username" value = "<?php echo ((isset($user['NameF']))? "{$user['NameF']}{$user['NameS']}":''); ?>" required>
</div>

<label for="add_mem_address" class="form__label">Address</label>

  <div class="row">
    <input name="add_mem_add_num" class="form__input" value = "<?php echo ((isset($user['StreetNum']))? $user['StreetNum']:''); ?>" placeholder="Street Number">
    <input name="add_mem_add_unit" class="form__input" value = "<?php echo ((isset($user['UnitNum']))? $user['UnitNum']:''); ?>" placeholder="Unit">
  </div>
  <div class="row">
    <input name="add_mem_add_streName" class="form__input" value = "<?php echo ((isset($user['StreetName']))? $user['StreetName']:''); ?>" placeholder="Street Name">
  </div>

  <div class="row">
    <input name="add_mem_add_city" class="form__input" value = "<?php echo ((isset($user['City']))? $user['City']:''); ?>" placeholder="City">
  </div>
  <div class="row">
    <input name="add_mem_add_sub" class="form__input" value = "<?php echo ((isset($user['Suburb']))? $user['Suburb']:''); ?>" placeholder="Suburb">
    <input type="number" name="add_mem_add_postcode" class="form__input" value = "<?php echo ((isset($user['PostCode']))? $user['PostCode']:''); ?>" placeholder="Post Code">
  </div>

  <div class="row">
    <label for="add_mem_admin" class="form__label">Admin:</label>
    <input type="checkbox" name="add_mem_admin" class="form__checkbox">
  </div>

  <div class="column">
    <button name="add_mem_sub" type="submit" class="form__button form__button--submit">Add User</button>
  </div>

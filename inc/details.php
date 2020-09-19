<!-- Form for changing details of the current user. -->
<?php include "inc/change_script.php"?>
<?php $user = get_from_table('tbl_login',"ID = {$_SESSION['USER']}")[0]; ?>

<form method="post" name="change_details" class="form column" autocomplete="on">
  <label for="cgn_det_name" class="form__label">Name:</label>
  <div class="row">
    <input name="cgn_det_name_f" class="form__input" placeholder="First Name" value="<?php echo $user['NameF'] ?>" required>
    <input name="cgn_det_name_s" class="form__input" placeholder="Surname" value="<?php echo $user['NameS'] ?>" required>
  </div>

  <label for="cgn_det_email" class="form__label">Email:</label>
  <div class="row">
    <input type="email" name="cgn_det_email" class="form__input" placeholder="sample@sample.com" value="<?php echo $user['Email'] ?>" required>
  </div>

  <label for="cgn_det_phone" class="form__label">Phone Number:</label>
  <div class="row">
    <input type="tel" name="cgn_det_phone" class="form__input" placeholder="123456789" value="<?php echo $user['Mobile'] ?>" required>
  </div>

  <label for="cgn_det_username" class="form__label">Username:</label>
  <div class="row">
    <input name="cgn_det_username" class="form__input" value="<?php echo $user['UserName'] ?>" placeholder="Username" required>
  </div>

  <label class="form__label">Address:</label>
  <div class="column">
    <div class="row">
      <input type="number" name="cgn_det_streNum" class="form__input" value="<?php echo $user['StreetNum'] ?>" placeholder="Street Number" required>
      <input type="number" name="cgn_det_unit" class="form__input" value="<?php echo $user['UnitNum'] ?>" placeholder="Unit">
    </div>
    <div  class="row">
      <input name="cgn_det_streName" class="form__input" value="<?php echo $user['StreetName'] ?>" placeholder="Street Name" required>
    </div>
    <div class="row">
      <input name="cgn_det_city" class="form__input" value="<?php echo $user['City'] ?>" placeholder="City" required>
    </div>
    <div class="row">
      <input name="cgn_det_suburb" class="form__input" value="<?php echo $user['Suburb'] ?>" placeholder="Suburb" required>
      <input type="number" name="cgn_det_postcode" class="form__input" value="<?php echo $user['PostCode'] ?>" placeholder="Post Code" required>
    </div>
  </div>


  <div class="row">
  <label for="cgn_det_con">Confirm Changes:</label>
    <input type="checkbox" name="cgn_det_con" class="form__checkbox" required>
  </div>

  <button type="submit" name="cgn_det_sub" class="form__button form__button--submit">Update</button>
</form>

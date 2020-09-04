<!-- Form for changing details of the current user. -->
<?php include "inc/change_script.php"?>

<form method="post" name="change_details" class="form" autocomplete="on">
  <div class="column">
    <div class="row">
      <label for="cgn_det_name" class="form__label">Name:</label>
      <input name="cgn_det_name_f" class="form__input" placeholder="First Name" value="" required>
      <input name="cgn_det_name_s" class="form__input" placeholder="Surname" required>
    </div>

    <div class="row">
      <label for="cgn_det_email" class="form__label">Email:</label>
      <input type="email" name="cgn_det_email" class="form__input" placeholder="sample@sample.com" required>
    </div>

    <div class="row">
      <label for="cgn_det_phone" class="form__label">Phone Number:</label>
      <input type="tel" name="cgn_det_phone" class="form__input" placeholder="123456789" required>
    </div>

    <div class="row">
      <label for="cgn_det_username" class="form__label">Username:</label>
      <input name="cgn_det_username" class="form__input" placeholder="Username" required>
    </div>

    <div class="row">
      <label for="cgn_det_address" class="form__label">Address:</label>
      <div class="column">
        <input name="cgn_det_add_num" class="form__input" placeholder="Street Number">
        <input name="cgn_det_add_unit" class="form__input" placeholder="Unit">
        <input name="cgn_det_add_streName" class="form__input" placeholder="Street Name">
        <input name="cgn_det_add_city" class="form__input" placeholder="City">
        <input name="cgn_det_add_sub" class="form__input" placeholder="Suburb">
        <input type="number" name="cgn_det_add_postcode" class="form__input" placeholder="Post Code">
      </div>
    </div>

  </div>

  <div class="row">
      <label for="cgn_det_con">Confirm Changes:</label>
      <input type="checkbox" name="cgn_det_con" class="form__checkbox" required>
  </div>

  <button type="submit" name="cgn_det_sub" class="form__button">Update</button>
</form>

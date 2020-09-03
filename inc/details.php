<!-- Form for changing details of the current user. -->
<?php include "inc/change_script.php"?>
<div class="cgnDet">
Change your Details here.
<p />

<form method="post" name="change_details" class="form">
  <div class="row">
    <div class="column">
      <label for="cgn_det_name">Name:</label>
      <br>
      <label for="cgn_det_email">Email:</label>
      <br>
      <label for="cgn_det_phone">Phone Number:</label>
      <br>
      <label for="cgn_det_address">Address:</label>
    </div>

    <div class="column">
      <input name="cgn_det_name_f" class="form__input" placeholder="First Name" value="<?php echo htmlspecialchars($fName); ?>">
      <input name="cgn_det_name_s" class="form__input" placeholder="Surname" value="<?php echo htmlspecialchars($sName); ?>">
      <br>
      <input type="email" name="cgn_det_email" class="form__input" placeholder="sample@sample.com" value="<?php echo htmlspecialchars($email); ?>">
      <br>
      <input type="tel" name="cgn_det_phone" class="form__input" placeholder="123456789" value="<?php echo htmlspecialchars($phone); ?>">
      <br>
      <input name="cgn_det_streNum" class="form__input" placeholder="Street Number" value="<?php echo htmlspecialchars($streNum); ?>">
      <input name="cgn_det_unit" class="form__input" placeholder="Unit" value="<?php echo htmlspecialchars($unit); ?>">
      <br>
      <input name="cgn_det_streName" class="form__input" placeholder="Street Name" value="<?php echo htmlspecialchars($streName); ?>">
      <br>
      <input name="cgn_det_city" class="form__input" placeholder="City" value="<?php echo htmlspecialchars($city); ?>">
      <input name="cgn_det__sub" class="form__input" placeholder="Suburb" value="<?php echo htmlspecialchars($suburb); ?>">
      <input type="number" name="cgn_det_postcode" class="form__input" placeholder="Post Code" value="<?php echo htmlspecialchars($postCode); ?>">
    </div>
  </div>

  <div class="row">
    <div class="column">
      <label for="cgn_det_chk">Confirm:</label>
    </div>

    <div class="column">
      <input type="checkbox" name="cgn_det_con" class="form__checkbox" required>
    </div>
  </div>

  <div class="cgnDet__btn--array">
    <button type="submit" name="cgn_det_get" class="form__button--get">Fill Form</button>
    <button type="submit" name="cgn_det_sub" class="form__button">Update</button>
  </div>
</form>
</div>

<!-- Form for changing details of the current user. -->
<?php include "inc/change_script.php"?>
<div class="cgnDet">
Change your Details here.
<p />

<form method="post" name="change_details" class="cgnDet__form">
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
      <input name="cgn_det_name_f" class="cgnDet__ipt" placeholder="First Name" value="<?php echo htmlspecialchars($fName); ?>">
      <input name="cgn_det_name_s" class="cgnDet__ipt" placeholder="Surname" value="<?php echo htmlspecialchars($sName); ?>">
      <br>
      <input type="email" name="cgn_det_email" class="cgnDet__ipt" placeholder="sample@sample.com" value="<?php echo htmlspecialchars($email); ?>">
      <br>
      <input type="tel" name="cgn_det_phone" class="cgnDet__ipt" placeholder="123456789" value="<?php echo htmlspecialchars($phone); ?>">
      <br>
      <input name="cgn_det_streNum" class="cgnDet__ipt" placeholder="Street Number" value="<?php echo htmlspecialchars($streNum); ?>">
      <input name="cgn_det_unit" class="cgnDet__ipt" placeholder="Unit" value="<?php echo htmlspecialchars($unit); ?>">
      <br>
      <input name="cgn_det_streName" class="cgnDet__ipt" placeholder="Street Name" value="<?php echo htmlspecialchars($streName); ?>">
      <br>
      <input name="cgn_det_city" class="cgnDet__ipt" placeholder="City" value="<?php echo htmlspecialchars($city); ?>">
      <input name="cgn_det__sub" class="cgnDet__ipt" placeholder="Suburb" value="<?php echo htmlspecialchars($suburb); ?>">
      <input type="number" name="cgn_det_postcode" class="cgnDet__ipt" placeholder="Post Code" value="<?php echo htmlspecialchars($postCode); ?>">
    </div>
  </div>

  <div class="row">
    <div class="column">
      <label for="cgn_det_chk">Confirm:</label>
    </div>

    <div class="column">
      <input type="checkbox" name="cgn_det_con" class="cgnDet__chk" required>
    </div>
  </div>

  <div class="cgnDet__btn--array">
    <button type="submit" name="cgn_det_get" class="cgnDet__btn--get">Fill Form</button>
    <button type="submit" name="cgn_det_sub" class="cgnDet__btn--send">Update</button>
  </div>
</form>
</div>

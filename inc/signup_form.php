<h2 class="signup__title">Register your interest with us!</h2>
<form class="form" method="post" name="signup_form">
    <label for="signup_name" class="form__label">Name</label>
    <div class="row">
      <input name="signup_name_f" class="form__input" placeholder="First Name" value = "<?php echo ((isset($user['NameF']))? $user['NameF']:''); ?>" required>

      <input name="signup_name_f" class="form__input" placeholder="Last Name" value = "<?php echo ((isset($user['NameS']))? $user['NameS']:''); ?>" required>
    </div>

    <label for="signup_email" class="form__label">Email</label>
    <div class="row">
      <input type="email" name="signup_email" class="form__input" placeholder="sample@sample.com" value = "<?php echo ((isset($user['Email']))? $user['Email']:''); ?>" required>
    </div>

    <label for="signup_phone" class="form__label">Phone Number</label>
    <div class="row">
      <input type="tel" name="signup_phone" class="form__input" placeholder="123456789" value = "<?php echo ((isset($user['Mobile']))? $user['Mobile']:''); ?>" required>
    </div>

    <label for="signup_address" class="form__label">Address</label>

      <div class="row">
        <input name="signup_num" class="form__input" value = "<?php echo ((isset($user['StreetNum']))? $user['StreetNum']:''); ?>" placeholder="Street Number">
        <input name="signup_unit" class="form__input" value = "<?php echo ((isset($user['UnitNum']))? $user['UnitNum']:''); ?>" placeholder="Unit">
      </div>
      <div class="row">
        <input name="signup_streName" class="form__input" value = "<?php echo ((isset($user['StreetName']))? $user['StreetName']:''); ?>" placeholder="Street Name">
      </div>

      <div class="row">
        <input name="signup_city" class="form__input" value = "<?php echo ((isset($user['City']))? $user['City']:''); ?>" placeholder="City">
      </div>
      <div class="row">
        <input name="signup_sub" class="form__input" value = "<?php echo ((isset($user['Suburb']))? $user['Suburb']:''); ?>" placeholder="Suburb">
        <input type="number" name="signup_postcode" class="form__input" value = "<?php echo ((isset($user['PostCode']))? $user['PostCode']:''); ?>" placeholder="Post Code">
      </div>

      <div class="column">
        <button name="signup_submit" type="submit" class="form__button form__button--submit">Submit</button>
      </div>
    </form>

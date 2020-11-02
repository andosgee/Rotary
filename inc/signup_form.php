<h2 class="signup__title">Register your interest with us!</h2>
<form class="form" method="post" name="signup_form">
    <label for="signup_name" class="form__label">Name</label>
    <div class="row">
      <input name="signup_name_f" class="form__input" placeholder="First Name"  required>

      <input name="signup_name_s" class="form__input" placeholder="Last Name"  required>
    </div>

    <label for="signup_email" class="form__label">Email</label>
    <div class="row">
      <input type="email" name="signup_email" class="form__input" placeholder="sample@sample.com" required>
    </div>

    <label for="signup_phone" class="form__label">Phone Number</label>
    <div class="row">
      <input type="tel" name="signup_phone" class="form__input" placeholder="123456789" required>
    </div>

    <label for="signup_address" class="form__label">Address</label>

      <div class="row">
        <input name="signup_num" class="form__input"  placeholder="Street Number">
        <input name="signup_unit" class="form__input" placeholder="Unit">
      </div>
      <div class="row">
        <input name="signup_streName" class="form__input"  placeholder="Street Name">
      </div>

      <div class="row">
        <input name="signup_city" class="form__input"  placeholder="City">
      </div>
      <div class="row">
        <input name="signup_sub" class="form__input"  placeholder="Suburb">
        <input type="number" name="signup_postcode" class="form__input"  placeholder="Post Code">
      </div>

      <div class="column">
        <button name="signup_submit" type="submit" class="form__button form__button--submit">Submit</button>
      </div>
    </form>

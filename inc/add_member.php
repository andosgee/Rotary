<?php include "inc/add_mem_script.php";?>
<!-- Form to add a user -->
<div class="addMem">

<form method="post" name="add_member_form" class="form">
  <div class="row">
    <div class="column">
      <label for="add_mem_name">Name:</label>
      <br>
      <label for="add_mem_email">Email:</label>
      <br>
      <label for="add_mem_phone">Phone Number:</label>
      <br>
      <label for="add_mem_username">Username:</label>
      <br>
      <label for="add_mem_address">Address:</label>
    </div>
    <div class="column">
      <input name="add_mem_name_f" class="form__input" placeholder="First Name" required>
      <input name="add_mem_name_s" class="form__input" placeholder="Surname" required>
      <br>
      <input type="email" name="add_mem_email" class="form__input" placeholder="sample@sample.com" required>
      <br>
      <input type="tel" name="add_mem_phone" class="form__input" placeholder="123456789" required>
      <br>
      <input name="add_mem_username" class="form__input" placeholder="Username" required>
      <br>
      <input name="add_mem_add_num" class="form__input" placeholder="Street Number">
      <input name="add_mem_add_unit" class="form__input" placeholder="Unit">
      <br>
      <input name="add_mem_add_streName" class="form__input" placeholder="Street Name">
      <br>
      <input name="add_mem_add_city" class="form__input" placeholder="City">
      <input name="add_mem_add_sub" class="form__input" placeholder="Suburb">
      <input type="number" name="add_mem_add_postcode" class="form__input" placeholder="Post Code">

    </div>
  </div>
  <button name="add_mem_sub" type="submit" class="addMem__btn">Add User</button>
</form>

<?php include "inc/new_user_info.php"; ?>

</div>

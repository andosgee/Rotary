<?php include "inc/add_mem_script.php";?>
<!-- Form to add a user -->

<form method="post" name="add_member_form">
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
      <input name="add_mem_name_f" placeholder="First Name" required>
      <input name="add_mem_name_s" placeholder="Surname" required>
      <br>
      <input type="email" name="add_mem_email" placeholder="sample@sample.com" required>
      <br>
      <input type="tel" name="add_mem_phone" placeholder="123456789" required>
      <br>
      <input name="add_mem_username" placeholder="Username" required>
      <br>
      <input name="add_mem_add_num" placeholder="Street Number">
      <input name="add_mem_add_unit" placeholder="Unit">
      <br>
      <input name="add_mem_add_streName" placeholder="Street Name">
      <br>
      <input name="add_mem_add_city" placeholder="City">
      <input name="add_mem_add_sub" placeholder="Suburb">
      <input type="number" name="add_mem_add_postcode" placeholder="Post Code">

    </div>
  </div>
  <button name="add_mem_sub" id="add_mem_sub">Add User</button>
</form>

<?php include "inc/new_user_info.php"; ?>

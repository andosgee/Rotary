<?php include "inc/add_mem_script.php";?>
<!-- Form to add a user -->
<div class="addMem">

<form method="post" name="add_member_form" class="addMem__form">
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
      <input name="add_mem_name_f" class="addMem__ipt" placeholder="First Name" required>
      <input name="add_mem_name_s" class="addMem__ipt" placeholder="Surname" required>
      <br>
      <input type="email" name="add_mem_email" class="addMem__ipt" placeholder="sample@sample.com" required>
      <br>
      <input type="tel" name="add_mem_phone" class="addMem__ipt" placeholder="123456789" required>
      <br>
      <input name="add_mem_username" class="addMem__ipt" placeholder="Username" required>
      <br>
      <input name="add_mem_add_num" class="addMem__ipt" placeholder="Street Number">
      <input name="add_mem_add_unit" class="addMem__ipt" placeholder="Unit">
      <br>
      <input name="add_mem_add_streName" class="addMem__ipt" placeholder="Street Name">
      <br>
      <input name="add_mem_add_city" class="addMem__ipt" placeholder="City">
      <input name="add_mem_add_sub" class="addMem__ipt" placeholder="Suburb">
      <input type="number" name="add_mem_add_postcode" class="addMem__ipt" placeholder="Post Code">

    </div>
  </div>
  <button name="add_mem_sub" type="submit" class="addMem__btn">Add User</button>
</form>

<?php include "inc/new_user_info.php"; ?>

</div>

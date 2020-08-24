<?php include "inc/signin_script.php"; ?>

<div class="signin">
  <h2>Signin</h2>
  <div class="signin" id="form">
    <form method="post" name="signin">
      <div class="row">
        <div class="column">
          <label for="signin_user">Username:</label>
          <br>
          <label for=for="signin_pass">Password:</label>
        </div>
        <div class="column">
          <input name="signin_user" id="signin_user" placeholder="Username" required>
          <br>
          <input type="password" name="signin_pass" id="signin_pass" placeholder="Password" required>
        </div>
      </div>
      <div class="row">
        <button type="submit" name="signin_butt" id="signin_butt">Login</button>
      </div>
    </form>
  </div>
</div>

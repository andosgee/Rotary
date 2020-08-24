<?php include "inc/signup_script.php";?>

<div class="signup">
  <div class="signup" id="left_content"> <!--Content on page, info on how to join and why join-->
    Information on meeting times and place
    <iframe></iframe>
  </div>
  <div class="signup" id="right_content"> <!--Form on page, user can express interest. Sends emial on how to join and to the admin to say they are coming-->
    <?php
      if($form_show == "True"){
        echo'<form method="post" name="express_int">
              <div class="row"><!--Top of the form-->
                <div class="column"> <!--Left side of form-->
                  <label for="express_int_name">Name:</label>
                  <label for="express_int_email">Email:</label>
                </div>
                <div class="column"> <!--Right side of the form-->
                  <input name="express_int_name" id="express_int_name" placeholder="Name" required>
                  <input type="email" name="express_int_email" id="express_int_email" placeholder="Email" required>
                </div>
              </div>
              <div class="row"> <!--Bottom of Form. Contains button-->
                <button type="submit" name="express_int_button">Submit</button>
              </div>
            </form>';
      }else{
        echo $userMessage;
      }

    ?>


  </div>
</div>

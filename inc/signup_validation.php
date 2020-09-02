<div class="signup column">
<?php
$display_success_message = false;

if(isset($_POST["signup_submit"])){ #checks for button press
  #Set Variables
  $name = secure($_POST['signup_name']);
  $email = secure($_POST['signup_email']);

  #Sql statement for adding to list
  $insert_query = "INSERT INTO `tbl_interest` (`Name`,`Email`) VALUES ('{$name}','{$email}')";

  if($conn -> query($insert_query)){
    //On Success
    $display_success_message = true;
  }
  else{
    //On Fail
    echo '<span class="signup__error">
            A problem has occurred. Please try again later.
          </span>';
  }
}

//If successful form submit, replace form with message
//Else display the form
if($display_success_message){
  echo "<h2 class='signup__message'>Thank you for registering.
            <br />
            We will be in touch shortly.
        </h2>";
}
else{ //Display interest form
  include './inc/signup_form.php';
}
?>
</div>

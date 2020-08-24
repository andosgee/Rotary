<?php
$form_show = "True";
$name = $email = $userMessage = ""; #Sets the vars to Empty
if(isset($_POST["express_int_button"])){ #checks for button press
  #Set Vars
  $name = ltrim(rtrim($_POST["express_int_name"])); #trims name input
  $email = ltrim(rtrim($_POST["express_int_email"])); #trims email input
  $name = mysqli_escape_string($conn, $name); #Protects against injection
  $email = mysqli_escape_string($conn, $email); #protects against injection

  #Sql statement for adding to list
  $sql_interest_add = "INSERT INTO `tbl_interest` (`Name`,`Email`) VALUES ('{$name}','{$email}')";

  #connection and sending of query
  $conn -> query($sql_interest_add);

  #sets the form to invisible
  $form_show = "False";

  #sets user Message
  $userMessage = "Successfully Registered Your Interest.";
}
?>

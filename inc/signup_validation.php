<div class="signup column">
<?php
$display_success_message = false;

if(isset($_POST["signup_submit"])){ #checks for button press
  //Sets Vars
  $fName = secure($_POST['signup_name_f']);
  $sName = secure($_POST['signup_name_s']);
  $email = secure($_POST['signup_email']);
  $phone = secure($_POST['signup_phone']);
  $streNum = secure($_POST['signup_num']);
  $unit = secure($_POST['signup_unit']);
  $streNam = secure($_POST['signup_streName']);
  $city = secure($_POST['signup_city']);
  $suburb = secure($_POST['signup_sub']);
  $postCode = secure($_POST['signup_postcode']);

  if(empty($unit)){ //Only field able to be blank - set to null
    $unit = 'NULL';
  }

  #Sql statement for adding to list
  $insert_query = "INSERT INTO `tbl_interest`(`NameF`, `NameS`, `Email`, `Mobile`, `StreetNum`, `UnitNum`, `StreetName`,
    `City`, `Suburb`, `PostCode`) VALUES  ('{$fName}','{$sName}','{$email}','{$phone}','{$streNum}',{$unit},'{$streNam}',
      '{$city}','{$suburb}','{$postCode}')";

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

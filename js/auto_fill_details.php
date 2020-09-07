<?php
//Sets the Vars
$user = get_from_table('tbl_login',"ID = {$_SESSION['USER']}")[0];

  $fName = $user['NameF'];
  $sName = $user['NameS'];
  $email = $user['Email'];
  $phone = $user['Mobile'];
  $userName = $user['UserName'];
  $streNum = $user['StreetNum'];
  $unit = $user['UnitNum'];
  $streName = $user['StreetName'];
  $city = $user['City'];
  $suburb = $user['Suburb'];
  $postCode = $user['PostCode'];

?>

<script type="text/javascript">
//Auto fills the form with the details of the user



function autoFillForm() {
  var count = 0; //Counter for the for loop
  //Array with fields
  var fieldList = ['cgn_det_name_f','cgn_det_name_s', 'cgn_det_email', 'cgn_det_phone', 'cgn_det_username', 'cgn_det_add_num', 'cgn_det_add_unit', 'cgn_det_add_streName','cgn_det_add_city','cgn_det_add_sub','cgn_det_add_postcode'];
  //Array with values
  var valueList = ['<?php echo $fName; ?>', '<?php echo $sName; ?>','<?php echo $email; ?>','<?php echo $phone; ?>','<?php echo $userName; ?>','<?php echo $streNum; ?>','<?php echo $unit; ?>','<?php echo $streName; ?>','<?php echo $city; ?>','<?php echo $suburb; ?>','<?php echo $postCode; ?>'];

  //For loop that goes through fields when the count is less than or = to length
  for (;count < fieldList.length; count++) {
    //Runs function with the lists
    autoFillField(fieldList[count],valueList[count]);
  }

};

function autoFillField(fieldName,value){

  return document.getElementsByName(fieldName).item(0).setAttribute("value", value);
};

</script>

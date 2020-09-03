<?php
// Script for chnaging details -- To whom ever has to test, I am very sorry for the length

//Fills form with Details
if(isset($_POST['cgn_det_get'])){ #once button is pressed
  //Sql Statement
  $user = get_from_table('tbl_login',"ID = {$_SESSION['USER']}")[0];

    $fName = $user['NameF'];
    $sName = $user['NameS'];
    $email = $user['Email'];
    $phone = $user['Mobile'];
    $streNum = $user['StreetNum'];
    $unit = $user['UnitNum'];
    $streName = $user['StreetName'];
    $city = $user['City'];
    $suburb = $user['Suburb'];
    $postCode = $user['PostCode'];
}

if(isset($_POST['cgn_det_sub'])){
  //Sets Vars
  $fName = secure($_POST['cgn_det_name_f']);
  $sName = securesecure($_POST['cgn_det_name_s']);
  $email = securesecure($_POST['cgn_det_email']);
  $phone = securesecure($_POST['cgn_det_phone']);
  $streNum = securesecure($_POST['cgn_det_streNum']);
  $unit = securesecure($_POST['cgn_det_unit']);
  $streNam = securesecure($_POST['cgn_det_streName']);
  $city = securesecure($_POST['cgn_det_city']);
  $suburb = securesecure($_POST['cgn_det__sub']);
  $postCode = securesecure($_POST['cgn_det_postcode']);

  //SQL Statement
  $sql_update_info = "UPDATE `tbl_login` SET {$sql_ins_fname}, {$sql_ins_sname}, {$sql_ins_email}, {$sql_ins_phone}, {$sql_ins_strenum}, {$sql_ins_unit}, {$sql_ins_strename}, {$sql_ins_city}, {$sql_ins_sub}, {$sql_ins_post} WHERE `ID` = {$_SESSION['USER']}";

  //Run sql statement
  $conn -> query($sql_update_info);
  echo"<script>window.alert('Successfully Updated Your Details.');</script>";
}
 ?>

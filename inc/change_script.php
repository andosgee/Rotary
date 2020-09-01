<?php
// Script for chnaging details -- To whom ever has to test, I am very sorry for the length

//Fills form with Details
$fName = $sName = $email = $phone = $streNum = $unit = $streName = $city = $suburb = $postCode ="";
if(isset($_POST['cgn_det_get'])){ #once button is pressed
  //Sql Statement
  $sql_get_info = "SELECT * FROM `tbl_login` WHERE `ID` = {$_SESSION['USER']}";

  //Gets results
  $info_results = $conn -> query($sql_get_info);

  //details
  foreach ($info_results as $items) {
    $fName = $items['NameF'];
    $sName = $items['NameS'];
    $email = $items['Email'];
    $phone = $items['Mobile'];
    $streNum = $items['StreetNum'];
    $unit = $items['UnitNum'];
    $streName = $items['StreetName'];
    $city = $items['City'];
    $suburb = $items['Suburb'];
    $postCode = $items['PostCode'];
  }
}

if(isset($_POST['cgn_det_sub'])){
  //Sets Vars
  $fName = ltrim(rtrim($_POST['cgn_det_name_f']));
    $fName =  mysqli_escape_string($conn, $fName);
  $sName = ltrim(rtrim($_POST['cgn_det_name_s']));
    $sName =  mysqli_escape_string($conn, $sName);
  $email = ltrim(rtrim($_POST['cgn_det_email']));
    $email =  mysqli_escape_string($conn, $email);
  $phone = ltrim(rtrim($_POST['cgn_det_phone']));
    $phone =  mysqli_escape_string($conn, $phone);
  $streNum = ltrim(rtrim($_POST['cgn_det_streNum']));
    $streNum =  mysqli_escape_string($conn, $streNum);
  $unit = ltrim(rtrim($_POST['cgn_det_unit']));
    $unit =  mysqli_escape_string($conn, $unit);
  $streNam = ltrim(rtrim($_POST['cgn_det_streName']));
    $streNam =  mysqli_escape_string($conn, $streNam);
  $city = ltrim(rtrim($_POST['cgn_det_city']));
    $city =  mysqli_escape_string($conn, $city);
  $suburb = ltrim(rtrim($_POST['cgn_det__sub']));
    $suburb =  mysqli_escape_string($conn, $suburb);
  $postCode = ltrim(rtrim($_POST['cgn_det_postcode']));
    $postCode =  mysqli_escape_string($conn, $postCode);

  //SQL Breakdown if any fields are empty
  if(!empty($fName)){
    $sql_ins_fname = "`NameF`='{$fName}'";
  }else{
    $sql_ins_fname = "";
  }

  if(!empty($sName)){
    $sql_ins_sname = "`NameS`='{$sName}'";
  }else{
    $sql_ins_sname = "";
  }

  if(!empty($email)){
    $sql_ins_email = "`Email`='{$email}'";
  }else{
    $sql_ins_email = "";
  }

  if(!empty($phone)){
    $sql_ins_phone = "`Mobile`='{$phone}'";
  }else{
    $sql_ins_phone = "";
  }

  if(!empty($streNum)){
    $sql_ins_strenum = "`StreetNum`='{$streNum}'";
  }else{
    $sql_ins_strenum = "";
  }

  if(!empty($unit)){
    $sql_ins_unit = "`UnitNum`='{$unit}'";
  }else{
    $sql_ins_unit = "";
  }

  if(!empty($streNam)){
    $sql_ins_strename = "`StreetName`='{$streNam}'";
  }else{
    $sql_ins_strename = "";
  }

  if(!empty($city)){
    $sql_ins_city = "`City`='{$city}'";
  }else{
    $sql_ins_city = "";
  }

  if(!empty($suburb)){
    $sql_ins_sub = "`Suburb`='{$suburb}'";
  }else{
    $sql_ins_sub = "";
  }

  if(!empty($postCode)){
    $sql_ins_post = "`PostCode`='{$postCode}'";
  }else{
    $sql_ins_post = "";
  }

  //SQL Statement
  $sql_update_info = "UPDATE `tbl_login` SET {$sql_ins_fname}, {$sql_ins_sname}, {$sql_ins_email}, {$sql_ins_phone}, {$sql_ins_strenum}, {$sql_ins_unit}, {$sql_ins_strename}, {$sql_ins_city}, {$sql_ins_sub}, {$sql_ins_post} WHERE `ID` = {$_SESSION['USER']}";

  //Run sql statement
  $conn -> query($sql_update_info);
  echo"
  <script>window.alert('Successfully Updated Your Details.');</script>
  ";
}
 ?>

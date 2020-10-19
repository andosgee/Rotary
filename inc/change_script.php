<?php
//Changes the users info
if(isset($_POST['cgn_det_sub'])){
  //Sets Vars
  $fName = secure($_POST['cgn_det_name_f']);
  $sName = secure($_POST['cgn_det_name_s']);
  $email = secure($_POST['cgn_det_email']);
  $phone = secure($_POST['cgn_det_phone']);
  $streNum = secure($_POST['cgn_det_streNum']);
  $unit = secure($_POST['cgn_det_unit']);
  $streNam = secure($_POST['cgn_det_streName']);
  $city = secure($_POST['cgn_det_city']);
  $suburb = secure($_POST['cgn_det_suburb']);
  $postCode = secure($_POST['cgn_det_postcode']);

  if(empty($unit)){ //Only field able to be blank - set to null
    $unit = 'NULL';
  }

  //SQL Statement
  $sql_update_info = "UPDATE `tbl_login`
                      SET tbl_login.NameF = '{$fName}', tbl_login.NameS = '{$sName}',
                        tbl_login.Email = '{$email}', tbl_login.Mobile= {$phone},
                        tbl_login.StreetNum = {$streNum}, tbl_login.UnitNum = {$unit},
                        tbl_login.StreetName = '{$streNam}', tbl_login.City = '{$city}',
                        tbl_login.Suburb = '{$suburb}', tbl_login.PostCode = {$postCode}
                      WHERE `ID` = {$_SESSION['USER']}";

  //Run sql statement
  $conn -> query($sql_update_info);?>
  <script>
    window.alert('Successfully Updated Your Details.');
  </script>
<?php } ?>

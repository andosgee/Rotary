<?php
  // Script for adding a user to the website, takes from inputs

  if(isset($_POST['add_mem_sub'])){
    //Sets the vars from the form and protects them
    $fName = secure($_POST['add_mem_name_f']);
    $sName = secure($_POST['add_mem_name_s']);
    $email = secure($_POST['add_mem_email']);
    $phoNum = secure($_POST['add_mem_phone']);
    $streNum = secure($_POST['add_mem_add_num']);
    $unit = secure($_POST['add_mem_add_unit']);
    $streNam = secure($_POST['add_mem_add_streName']);
    $city = secure($_POST['add_mem_add_city']);
    $suburb = secure($_POST['add_mem_add_sub']);
    $postcode = secure($_POST['add_mem_add_postcode']);
    $username = secure($_POST['add_mem_username']);
    $admin = secure($_POST['add_mem_admin']);
    $password = password_hash("default", PASSWORD_DEFAULT);

    //SQL Statement to send the data for the new User
    $sql_add_user = "INSERT INTO `tbl_login` (`NameF`, `NameS`, `Email`, `Mobile`, `StreetNum`, `UnitNum`, `StreetName`, `City`,
      `Suburb`, `PostCode`, `UserName`, `Password`, `Admin`, `Active`)
    VALUES ('{$fName}','{$sName}','{$email}','{$phoNum}','{$streNum}','{$unit}','{$streNam}','{$city}','{$suburb}','{$postcode}',
      '{$username}','{$password}',{$admin},1)";
  $conn -> query($sql_add_user);

  }

?>

<?php
  // Script for adding a user to the website, takes from inputs
  $fName = $sName = $email = $phoNum = $streNum = $unit = $streNam = $city = $suburb = $postcode = $username = "";

  if(isset($_POST['add_mem_sub'])){
    //Sets the vars from the form and protects them
    $fName = ltrim(rtrim($_POST['add_mem_name_f']));
      $fName =  mysqli_escape_string($conn, $fName);
    $sName = ltrim(rtrim($_POST['add_mem_name_s']));
      $sName =  mysqli_escape_string($conn, $sName);
    $email = ltrim(rtrim($_POST['add_mem_email']));
      $email =  mysqli_escape_string($conn, $email);
    $phoNum = ltrim(rtrim($_POST['add_mem_phone']));
      $phoNum =  mysqli_escape_string($conn, $phoNum);
    $streNum = ltrim(rtrim($_POST['add_mem_add_num']));
      $streNum =  mysqli_escape_string($conn, $streNum);
    $unit = ltrim(rtrim($_POST['add_mem_add_unit']));
      $unit =  mysqli_escape_string($conn, $unit);
    $streNam = ltrim(rtrim($_POST['add_mem_add_streName']));
      $streNam =  mysqli_escape_string($conn, $streNam);
    $city = ltrim(rtrim($_POST['add_mem_add_city']));
      $city =  mysqli_escape_string($conn, $city);
    $suburb = ltrim(rtrim($_POST['add_mem_add_sub']));
      $suburb =  mysqli_escape_string($conn, $suburb);
    $postcode = ltrim(rtrim($_POST['add_mem_add_postcode']));
      $postcode =  mysqli_escape_string($conn, $postcode);
    $username = ltrim(rtrim($_POST['add_mem_username']));
      $username =  mysqli_escape_string($conn, $username);
    $password = password_hash("P1zz4B0x", PASSWORD_DEFAULT);

    //SQL Statement to send the data for the new User
    $sql_add_user = "INSERT INTO `tbl_login` (`NameF`, `NameS`, `Email`, `Mobile`, `StreetNum`, `UnitNum`, `StreetName`, `City`,
      `Suburb`, `PostCode`, `UserName`, `Password`, `Admin`, `Active`)
    VALUES ('{$fName}','{$sName}','{$email}','{$phoNum}','{$streNum}','{$unit}','{$streNam}','{$city}','{$suburb}','{$postcode}',
      '{$username}','{$password}','N','Y')";
  $conn -> query($sql_add_user);
  
  }

?>

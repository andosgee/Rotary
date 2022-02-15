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
    $password = password_hash("{$username}", PASSWORD_BCRYPT);

    if(isset($_POST['add_mem_admin'])){
      $admin = 1;
    }
    else{
      $admin = 0;
    }
    if(empty($unit)){ //Only field able to be blank - set to null
      $unit = 'NULL';
    }
    // $email_check = $username_check = '';
    $sql_email_check = "SELECT * FROM `tbl_login` WHERE `Email` = '{$email}' OR `UserName` = '{$username}'";
    $duplicate_entries = $conn -> query($sql_email_check);
    print_r($duplicate_entries);
    foreach ($duplicate_entries as $key) {
      echo $key;
      echo '1';
    }
    // echo(count($duplicate_entries));
    if(sizeof($duplicate_entries) == 0){

    //SQL Statement to send the data for the new User
      $sql_add_user = "INSERT INTO `tbl_login` (`NameF`, `NameS`, `Email`, `Mobile`, `StreetNum`, `UnitNum`, `StreetName`, `City`,
        `Suburb`, `PostCode`, `UserName`, `Password`, `Admin`, `Active`,`Publish`)
        VALUES ('{$fName}','{$sName}','{$email}','{$phoNum}','{$streNum}',{$unit},'{$streNam}','{$city}','{$suburb}','{$postcode}',
        '{$username}','{$password}',{$admin},1,1)";
      $conn -> query($sql_add_user);

  //If added user was from interest table remove from interest
  }else {
      echo "<script>window.alert('Users Details Already Exist.')</script>";
    }
  ?>


  <script>
    window.alert('Successfully Added User.');
  </script>

<?php } ?>

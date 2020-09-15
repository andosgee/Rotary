<?php

if(isset($_POST['delete_user'])){
  $user = $_POST['user_select'];
  $sql_inactive = "UPDATE `tbl_login` SET `Active` = 0, `Admin` = 0 WHERE `ID` = {$user}";
  $conn -> query($sql_inactive);
}

if(isset($_POST['update_user'])){
  $user = $_POST['user_select'];
  $activate = $_POST['reinstate_member_chk'];
  $admin = $_POST['make_admin_user'];
  $admin_rem = $_POST['remove_admin_user'];

  if(isset($activate)){
    $sql_act = "`Active` = 1";
  }else{
    $sql_act = '';
  }

  if(isset($admin)){
    $sql_admin = ",`Admin` = 1";
  }else {
    $sql_admin = "";
  }

  if(isset($admin_rem)){
    $sql_admin = ",`Admin` = 0";
  }else {
    $sql_admin = "";
  }


  $sql_update = "UPDATE `tbl_login` SET {$sql_act} {$sql_admin} WHERE `ID` = {$user}";
}





?>

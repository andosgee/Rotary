<?php

if(isset($_POST['delete_user'])){
  $id = secure($_POST['user_select']);
  $sql_inactive = "UPDATE `tbl_login` SET `Active` = 0 WHERE `ID` = {$id}";
  $conn -> query($sql_inactive);
}


if(isset($_POST['update_user'])){
  $id = secure($_POST['user_select']);
  // $active = secure();
  // $admin = secure($_POST['admin_status']);

  if(isset($_POST['active_status'])){ //Convert checkbox to boolean
    $active = 1; //Ticked
  }
  else{
    $active = 0; //Unticked
  }


  if(isset($_POST['admin_status'])){ //Convert checkbox to boolean
    $admin = 1; //Ticked
  }
  else{
    $admin = 0; //Unticked
  }

  $sql_update = "UPDATE `tbl_login` SET tbl_login.Active = {$active}, tbl_login.Admin = {$admin} WHERE `ID` = {$id}";
  $conn -> query($sql_update);
}
?>

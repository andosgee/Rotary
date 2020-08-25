<?php
  if(isset($_POST['admin_pwd_reset_btn'])){
    $uid = $_POST['admin_pwd_reset_select'];
    $password_reset = password_hash("Admin", PASSWORD_DEFAULT);

    $sql_reset_pwd = "UPDATE `tbl_login` SET `Password` ='{$password_reset}' WHERE `ID` = {$uid}";
    $conn -> query($sql_reset_pwd);
  }



?>

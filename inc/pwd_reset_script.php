<?php
  $err_pwd = "";
  if(isset($_POST['admin_pwd_reset_btn'])){
    $uid = $_POST['admin_pwd_reset_select'];
    $password_reset = password_hash("Admin", PASSWORD_DEFAULT);

    $sql_reset_pwd = "UPDATE `tbl_login` SET `Password` ='{$password_reset}' WHERE `ID` = {$uid}";
    $conn -> query($sql_reset_pwd);
  }

  if(isset($_POST['pwd_change_btn'])){
    $uid = $_SESSION["USER"];
    $pwd = ltrim(rtrim($_POST['pwd_change_pwd']));
    $pwd = mysqli_escape_string($conn, $pwd);
    $pwd_ver = ltrim(rtrim($_POST['pwd_change_pwd_ver']));
    $pwd_ver = mysqli_escape_string($conn, $pwd_ver);

    if($pwd == $pwd_ver){
      $password_change = password_hash($pwd, PASSWORD_DEFAULT);

      $sql_change_pwd = "UPDATE `tbl_login` SET `Password` = '{$password_change}' WHERE `ID` = {$uid}";
      $conn -> query($sql_change_pwd);
    }else{
      $err_pwd = "Passwords Don't Match";
    }
  }

?>

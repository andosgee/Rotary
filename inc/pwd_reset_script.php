<?php
  $err_pwd = "";
  if(isset($_POST['pwd_reset_btn'])){
    //Email request
    header("location: landing_page.php");
  }

  if(isset($_POST['pwd_change_btn'])){
    $uid = $_SESSION["USER"];
    $pwd = secure($_POST['pwd_change_pwd']);
    $pwd_ver = secure($_POST['pwd_change_pwd_ver']);

    if($pwd === $pwd_ver){
      $password_change = password_hash($pwd, PASSWORD_BCRYPT);

      $sql_change_pwd = "UPDATE `tbl_login` SET `Password` = '{$password_change}' WHERE `ID` = {$uid}";
      $conn -> query($sql_change_pwd);
    }else{
      $err_pwd = "Passwords Don't Match";
    }
  }

?>

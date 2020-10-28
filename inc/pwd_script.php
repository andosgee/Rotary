<?php
$err_pwd = $suc_pwd = "";
if(isset($_POST['pwd_change_btn'])){
  $password_new = secure($_POST['pwd_change_pwd']);
  $password_ver = secure($_POST['pwd_change_pwd_ver']);

  if($password_new == $password_ver){
    $hash_pass = password_hash($password_new, PASSWORD_BCRYPT);
    $sql_pass = "UPDATE `tbl_login` SET `Password` = '{$hash_pass}' WHERE `ID` = {$_SESSION['USER']}";
    $conn -> query($sql_pass);
    $suc_pwd = "Password has been changed.";
  }else{
    $err_pwd = "Passwords don't match. Please try again.";
  }
}
if(isset($_POST['pwd_reset_btn'])){

  $username = secure($_POST['pwd_reset_user']);
  $email = secure($_POST['pwd_reset_email']);
  $phone = secure($_POST['pwd_reset_phone']);
  $password_new = secure($_POST['pwd_reset_pwd']);
  $password_ver = secure($_POST['pwd_reset_pwd_ver']);

  $user = get_from_table('tbl_login',"`UserName` = '{$username}' AND `Email` = '{$email}' AND `Mobile` = '{$phone}'");

  if($user){
    $user = $user[0];
    $id = $user['ID'];

  }
  if(isset($id)){
    if($password_new == $password_ver){
      $hash_pass = password_hash($password_new, PASSWORD_BCRYPT);
      $sql_res = "UPDATE `tbl_login` SET `Password` = '{$hash_pass}' WHERE `ID` = {$id}";
      $conn -> query($sql_res);
      $suc_pwd = "Password has been reset. <a href='login.php' class='login__link'>Return to Login.</a>";
    }else {
      $err_pwd = "Passwords don't match. Please try again.";
    }
  }else {
    $err_pwd = "Information does not match. Please try again.";
  }
}
?>

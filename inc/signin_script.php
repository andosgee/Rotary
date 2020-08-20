<?php
$username = $password = "";

if(isset($_POST["signin_butt"])){
  $username = ltrim(rtrim($_POST["signin_user"]));
  $password = ltrim(rtrim($_POST["signin_pass"]));
  $username = mysqli_escape_string($conn, $username);
  $password = mysqli_escape_string($conn, $password);

  $sql_login_search = "SELECT * FROM `tbl_login` WHERE `UserName` = {$username}";

  $login_pass = $conn -> query($sql_login_search);
  $login_pass_verif = $conn -> query($sql_login_search);
}




?>
